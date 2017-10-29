<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\YfcAdv;
use App\Http\Models\YfcStyle;
use App\Http\Models\YfcTenants;
use App\Http\Models\YfcTenantsPic;
use App\Http\Models\YfcTenantsSet;
use App\Http\Models\YfcTenantsSort;
use App\Http\Models\YfcTenantsSortview;
use App\Http\Models\YfcTenantsSortviewComment;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;


//待确认功能
class IndexController extends Controller
{

    public function redirect(){
        return Redirect::to('beijing/sheying');
    }


    public function index($name = 'beijing' ,$id = 'sheying' )
    {
        # 过滤非法的url
        if($id!='sheying' && $id!="hunli" && !is_numeric($id)){
            return Redirect::to('/');
        }

        if($id!='sheying' && $id!="hunli"){
            $tenants = YfcTenants::where('id',$id)->first();

            if(empty($tenants['name'])) {
                return Redirect::to("/");
            }

            $tenantssort = YfcTenantsSort::where('tenantsid',$id)->first();
            $tenantssortview = YfcTenantsSortview::where('tenantsid',$id)->orderby("date",'asc')->get()->toArray();
            $tenantssortviewcomment = YfcTenantsSortviewComment::where('tenantsid',$id)->orderby("date",'asc')->get()->toArray();
            $city = $tenants['city'];
            $pycity = Config::get('city.'.$city,'beijing');
            //Session::put('city',$city);

            $tenantssets = YfcTenantsSet::where('tenantsId',$id)->orderBy('recommend','asc')->limit(3)->get()->toArray();

            foreach($tenantssets as $key=>$v){
                if(isset($v['kind']) && $v['kind']){
                    $v['kind'] = json_decode($v['kind'],true);
                }
                if(isset($v['cover']) && $v['cover']){
                    $v['cover'] = json_decode($v['cover'],true);
                }
                if(isset($v['picDetail']) && $v['picDetail']){
                    $v['picDetail'] = json_decode($v['picDetail'],true);
                }
                $tenantssets[$key] = $v;
            }
            $countsets = YfcTenantsSet::where('tenantsId',$id)->count();

            $tenantspics = YfcTenantsPic::where('tenantsId', $id)->limit(3)->get();
            foreach($tenantspics as $k => $t){
                if(isset($t['cover']) && $t['cover']){
                    $t['cover'] = json_decode($t['cover'],true);
                }
                if(isset($t->firstcover) && $t->firstcover){
                    $t['firstcover'] = json_decode($t['firstcover'],true);
                }
                if(isset($t['picStyle']) && $t['picStyle']){
                    $t['picStyle'] = json_decode($t['picStyle'],true);
                }
                $tenantspics[$k] = $t;
            }
            $countpics = YfcTenantsPic::where('tenantsId',$id)->count();

            $title = $tenants['city'].$tenants['name'].' | 有榜「第'.$tenants['order_city'].'名」';
            $desc = $tenants['city'].$tenants['name'].'在《有榜婚嫁行业榜单》综合排名第'.$tenants['order_city'].'名，该商户在品牌榜单中排名第'.$tenants['brand_search_order'].'名，好评榜单中排名第'.$tenants['praise_order'].'名，希望能够帮助您了解到'.$tenants['name'].'怎么样的问题。';
            $keyword = $tenants['name'].', '.$tenants['name'].'怎么样, '.$tenants['name'].'行业第'.$tenants['order_city'].'名';

            $this->data = [
                'tenants' => $tenants,
                'title' => $title,
                'desc' => $desc,
                'keyword' => $keyword,
                'countsets' => $countsets,
                'countpics' => $countpics,
                'shoptype' => $tenants['shoptype'],
                'tenantssets' => $tenantssets,
                'tenantspics' => $tenantspics,
                'tenantssort' => $tenantssort,
                'tenantssortview' => $tenantssortview,
                'tenantssortviewcomment' => $tenantssortviewcomment,
                'city' => $city,
                'pycity' => $pycity
            ];

            return view("front/shop",$this->data);


        }else{
            $page = Request::get('page','1');
            $city = Config::get('city.'.$name,'北京');
            $this->data['pycity'] = $name;
            //无法获取城市，直接首页
            if(!$city) {
                return Redirect::to('/');
            }
            $this->data['city'] = $city;
            if($id=='sheying'){
                $shoptype = '婚纱摄影';
            }else{
                $shoptype = '婚礼策划';
            }
            $size = 100;
            $index = ($page-1)*20;

            $this->data['tenants'] = YfcTenants::where('city', 'like', '%'.$city.'%')
                ->select("yfc_tenants.*",'comments','alls','allcy','allce','day30s','day30cy','day30ce')
                ->where('shoptype',$shoptype)
                ->where('spread','!=','2')
                ->leftjoin("yfc_tenants_sort",'yfc_tenants_sort.tenantsid','=','yfc_tenants.id')
                ->skip($index)->take($size)
                ->orderBy('order_city','asc')->get()->toArray();

            $spread = YfcTenants::where('city', 'like', '%'.$city.'%')
                ->select("yfc_tenants.*",'comments','alls','allcy','allce','day30s','day30cy','day30ce')
                ->where('shoptype',$shoptype)
                ->where('spread','=','2')
                ->leftjoin("yfc_tenants_sort",'yfc_tenants_sort.tenantsid','=','yfc_tenants.id')
                ->orderBy('order_city','asc')->limit(1)->get();

            $this->data['spread'] = empty($spread[0])? []:$spread[0];

            $tids = [];
            foreach($this->data['tenants'] as $v) {
                $tids[] = $v['id'];
            }

            if(!empty($this->data['spread']['name'])) {
                $spreadset = YfcTenantsSet::where("tenantsId",$this->data['spread']['id'])->limit(1)->get();
                if(!empty($spreadset[0])) {
                    $this->data['spread']['taoxi'] = $spreadset[0];
                    $this->data['spread']['taoxi']['cover'] = json_decode($this->data['spread']['taoxi']['cover'],true);
                }
            }
            $taoxi = YfcTenantsSet::select('id','currentPrice','price','tenantsId','setName','cover')
                ->whereIn('tenantsId',$tids)
                ->orderBy('recommend','asc')->limit(3000)->get()->toArray();

            $taoxitmp = [];
            foreach($taoxi as $kk => $vv) {
                # 过滤超过三条的套系
                if(!empty($taoxitmp[$vv['tenantsId']]) && count($taoxitmp[$vv['tenantsId']])>=3){
                    continue;
                }

                if($vv['cover']){
                    $vv['cover'] = json_decode($vv['cover'],true);
                }
                $taoxitmp[$vv['tenantsId']][] = $vv;
            }
            foreach($this->data['tenants'] as $k => $v) {
                $this->data['tenants'][$k]['taoxi'] = empty($taoxitmp[$v['id']]) ? [] : $taoxitmp[$v['id']];
            }


            //echo '<pre>' ; print_r($this->data) ;exit;
            $this->data['title'] = $city.'婚纱摄影前十名_'.$city.'婚纱摄影排名TOP100榜单【有榜】';
            $this->data['desc'] = '「有榜」依托'.$city.'婚纱摄影行业大数据，为您提供实时更新、用户打分的'.$city.'婚纱摄影榜单（包含'.$city.'婚纱摄影前十名），而且您也可以自由的定制'.$city.'婚纱摄影排行榜。';
            $this->data['keyword'] =$city.'婚纱摄影,'.$city.'婚纱摄影前十名,'.$city.'婚纱摄影排行榜,'.$city.'婚纱摄影排名';
            //echo '<pre>' ; print_r($this->data) ;exit;
            $advtype = $shoptype=='婚纱摄影'?1:0;

            $advinfo = YfcAdv::where('type','1')->where('position','1')->where('city', 'like', '%'.$name.'%')->where('advtype',$advtype)->where('endTime','>',time())->first();
            $this->data['type'] = $shoptype=='婚纱摄影'?'sheying':'hunli';
            return view('front/index', $this->data);

        }
    }

    public function search($name=''){
        $this->data['type'] = Request::input("type")=="sheying" ? 'sheying':'hunli';
        $shoptype = Request::input("type")=="sheying"?'婚纱摄影':'婚礼策划';
        $this->data['city'] = Config::get('city.'.$name,'北京');
        $this->data['pycity'] = $name;
        $this->data['keyword'] = $keyword = Request::get('keyword','');

        //echo $shoptype ;exit;
        //echo $this->data['city'] ;exit;
        $this->data['tenants'] = YfcTenants::where('city', 'like', '%'.$this->data['city'].'%')
            //->select("yfc_tenants.*",'comments','alls','allcy','allce','day30s','day30cy','day30ce')
            ->where('shoptype',$shoptype)
            ->where('name','like',"%".$keyword."%")
            ->where('spread','!=','2')
            ->leftjoin("yfc_tenants_sort",'yfc_tenants_sort.tenantsid','=','yfc_tenants.id')
            ->limit(100)
            ->orderBy('order_city','asc')->get()->toArray();


        $tids = [];
        foreach($this->data['tenants'] as $v) {
            $tids[] = $v['id'];
        }

        $taoxi = YfcTenantsSet::select('id','currentPrice','price','tenantsId','setName','cover')
            ->whereIn('tenantsId',$tids)
            ->orderBy('recommend','asc')
            ->limit(1000)->get()->toArray();

        $taoxitmp = [];
        foreach($taoxi as $kk => $vv) {
            # 过滤超过三条的套系
            if(!empty($taoxitmp[$vv['tenantsId']]) && count($taoxitmp[$vv['tenantsId']])>=3){
                continue;
            }
            if($vv['cover']){
                $vv['cover'] = json_decode($vv['cover'],true);
            }
            $taoxitmp[$vv['tenantsId']][] = $vv;
        }

        foreach($this->data['tenants'] as $k => $v) {
            $this->data['tenants'][$k]['taoxi'] = empty($taoxitmp[$v['id']]) ? [] : $taoxitmp[$v['id']];
        }

        $this->data['title'] = $keyword.'在'.$this->data['city'].'的搜索结果-有榜';

        return view("front/search",$this->data);
    }


    public function kepian($id = 0){
        $picinfo = Yfctenantspic::where('id',$id)->first();
        if(isset($picinfo->cover) && $picinfo->cover){
            $picinfo->cover = json_decode($picinfo->cover,true);
        }
        $tenantsId = $picinfo->tenantsId;
        $info = Yfctenants::where('id',$tenantsId)->first();
        $city = $info->city;
        $pycity = Config::get('city.'.$city,'beijing');
        $recommpics = Yfctenantspic::where('id','!=',$id)->where('tenantsId',$tenantsId)->orderBy('marknums','desc')->take(4)->get();
        foreach($recommpics as $key=>$v){
            $v->firstcover = json_decode($v->firstcover,true);
            $recommpics[$key] = $v;
            $v->picStyle = json_decode($v->picStyle,true);
        }
        $shoptype = $info->shoptype;
        $dbtenants = Yfctenants::where('city', 'like', '%'.$city.'%')->where('shoptype',$shoptype)->skip(0)->take(50)->orderBy('order_city','asc')->get();
        $title = $picinfo->picName.' _'.$info->name.'-有榜';
        $desc = '有榜提供'.$info->name.'的'.$picinfo->picName.'客片欣赏！';
        $keyword = $picinfo->picName;
        $picinfo->picStyle = json_decode($picinfo->picStyle,true);
        return View::make('front.clientpicdetail')->with('dbtenants',$dbtenants)->with('title',$title)->with('desc',$desc)->with('keyword',$keyword)->with('pycity',$pycity)->with('city',$city)->with('picinfo',$picinfo)->with('info',$info)->with('tenantsId',$tenantsId)->with('recommpics',$recommpics);
    }


    public function kplist($id = 0){
        $tenants = Yfctenants::where('id',$id)->first()->toArray();
        if(empty($tenants)) {
            return Redirect::to('/');
        }
        $city = $tenants['city'];

        $pics = YfcTenantsPic::where('tenantsId',$id)->get();
        foreach($pics as $key=>$v){
            if($v['firstcover']){
                $v['firstcover'] = json_decode($v['firstcover'],true);
            }
            if($v['kind']){
                $v['kind'] = json_decode($v['kind'],true);
            }
            if($v['picStyle']){
                $v['picStyle'] = json_decode($v['picStyle'],true);
            }
            $pics[$key] = $v;
        }
        $title = $tenants['name'].'客片大全 ';
        $this->data = [
            'shoptype' => $tenants['shoptype'],
            'title' => $title,
            'pics' => $pics,
            'tenants' => $tenants,
            'city' => $city,
        ];

        return view("front/piclist",$this->data);
    }
    public function txlist($id = 0){
        $sets = YfcTenantsSet::where('tenantsId',$id)->orderBy('recommend','asc')->get();
        $tenants = Yfctenants::where('id',$id)->first()->toArray();
        if(empty($tenants)) {
            return Redirect::to('/');
        }
        $city = $tenants['city'];
        if(count($sets)){
            foreach($sets as $key=>$v){
                if($v['cover']){
                    $v['cover'] = json_decode($v['cover'],true);
                }
                if($v['picDetail']){
                    $v['picDetail'] = json_decode($v['picDetail'],true);
                }
                if($v['kind']){
                    $v['kind'] = json_decode($v['kind'],true);
                }
                $sets[$key] = $v;
            }
        }else{
            $sets = array();
        }

        $title = $tenants['name'].'套系大全 ';
        $this->data = [
            'shoptype' => $tenants['shoptype'],
            'title' => $title,
            'sets' => $sets,
            'tenants' => $tenants,
            'city' => $city,
        ];
        return view("front/taoxilist",$this->data);
    }


    public function kpdetail($id){
        $picinfo = YfcTenantsPic::where('id',$id)->first();
        if(isset($picinfo['cover']) && $picinfo['cover']){
            $picinfo['cover'] = json_decode($picinfo['cover'],true);
            $picinfo['firstcover'] = json_decode($picinfo['firstcover'],true);
        }
        $tenantsId = $picinfo['tenantsId'];
        $tenants = YfcTenants::where('id',$tenantsId)->first();
        $city = $tenants['city'];

        $recommpics = YfcTenantsPic::where('id','!=',$id)
            ->where('tenantsId',$tenantsId)
            ->orderBy('marknums','desc')
            ->limit(4)->get();

        foreach($recommpics as $key=>$v){
            $v['firstcover'] = json_decode($v['firstcover'],true);
            $v['picStyle'] = json_decode($v['picStyle'],true);
            $recommpics[$key] = $v;
        }
        $shoptype = $tenants['shoptype'];
        $title = $picinfo['picName'].' _'.$tenants['name'].'-有榜';
        $desc = '有榜提供'.$tenants['name'].'的'.$picinfo['picName'].'客片欣赏！';
        $keyword = $picinfo['picName'];
        $picinfo['picStyle'] = json_decode($picinfo['picStyle'],true);

        $this->data = [
            'picinfo' => $picinfo,
            'city' => $city,
            'tenants' => $tenants,
            'recommpics' => $recommpics,
            'shoptype' => $shoptype,
            'title' => $title,
            'desc' =>$desc,
            'keyword' => $keyword,
        ];
        return view("front/kpdetail",$this->data);
    }

    public function txdetail($tid = 0,$id = 0)
    {
        $info = Yfctenantsset::where('id', $id)->first();
        if(empty($info)) {
            return Redirect::to("/");
        }
        $tenants = YfcTenants::where('id', $info['tenantsId'])->first();

        $name = $tenants['name'];
        $city = $tenants['city'];
        $txname = $info['setName'];
        $remmends = Yfctenantsset::where('id', '!=', $id)->where('tenantsId', $info['tenantsId'])->skip(0)->take(6)->get();
        foreach ($remmends as $key => $v) {
            if ($v['cover']) {
                $v['cover'] = json_decode($v['cover'], true);
            }
            if ($v['picDetail']) {
                $v['picDetail'] = json_decode($v['picDetail'], true);
            }
            if ($v['kind']) {
                $v['kind'] = json_decode($v['kind'], true);
            }
            $remmends[$key] = $v;
        }

        if ($info['cover']) {
            $info['cover'] = json_decode($info['cover'], true);
        }
        if ($info['picDetail']) {
            $info['picDetail'] = json_decode($info['picDetail'], true);
        }
        if ($info['kind']) {
            $info['kind'] = json_decode($info['kind'], true);
        }
        $shoptype = $tenants['shoptype'];
        $title = $txname . '_' . $name . '-有榜 ';
        $desc = '通过有榜预定' . $txname . '原价' . $info->price . '，现价只需' . $info['currentPrice'] . '，赶快预定，机会难得！现在开始预约还有惊喜哦！';
        $keyword = $txname;

        $this->data = [
            'info' => $info,
            'tenants' => $tenants,
            'city' => $city,
            'remmends' => $remmends,
            'shoptype' => $shoptype,
            'title' => $title,
            'desc' => $desc,
            'keyword' => $keyword,
        ];

        return view("front/txdetail",$this->data);
    }

    public function dingzhi($name , $id = ''){
        $sty = Request::get('style','');
        $pyname = $name;
        $city = Config::get('city.'.$name,'北京');
        $style = explode(',',$sty);
        $cname = Request::get('name','');
        $price = Request::get('budget','');
        $minprice = ($price-2000) ? ($price-2000) : 0;
        $maxprice = $price+2000;
        $shoptype = Request::get('customized_name','婚纱摄影');

        $styles = YfcStyle::whereIn('name',$style)->select('tenantsId')->get();
        $this->data['cname'] = $cname;
        $this->data['city'] = $city;
        $ids = [];
        if(!empty($style[0])) {
            foreach($styles as $v){
                $ids[] = $v['tenantsId'];
            }
        }
        else {
            $ids = [0];
        }
        $ids = array_unique($ids);
        $this->data['tenants'] = YfcTenants::where('city', 'like', '%'.$this->data['city'].'%')
            ->select("yfc_tenants.*",'comments','alls','allcy','allce','day30s','day30cy','day30ce')
            ->where('shoptype',$shoptype)
            ->where('person_price','>=',$minprice)
            ->where('person_price','<=',$maxprice)
            ->whereIn('yfc_tenants.id',$ids)
            ->where('spread','!=','2')
            ->leftjoin("yfc_tenants_sort",'yfc_tenants_sort.tenantsid','=','yfc_tenants.id')
            ->limit(100)
            ->orderBy('order_city','asc')->get()->toArray();

        $tids = [];
        foreach($this->data['tenants'] as $v) {
            $tids[] = $v['id'];
        }

        $taoxi = YfcTenantsSet::select('id','currentPrice','price','tenantsId','setName','cover')
            ->whereIn('tenantsId',$tids)
            ->orderBy('recommend','asc')
            ->limit(1000)->get()->toArray();

        $taoxitmp = [];
        foreach($taoxi as $kk => $vv) {
            # 过滤超过三条的套系
            if(!empty($taoxitmp[$vv['tenantsId']]) && count($taoxitmp[$vv['tenantsId']])>=3){
                continue;
            }
            if($vv['cover']){
                $vv['cover'] = json_decode($vv['cover'],true);
            }
            $taoxitmp[$vv['tenantsId']][] = $vv;
        }

        foreach($this->data['tenants'] as $k => $v) {
            $this->data['tenants'][$k]['taoxi'] = empty($taoxitmp[$v['id']]) ? [] : $taoxitmp[$v['id']];
        }
        $this->data['title'] = $city.'的'.$shoptype.'榜单定制页-有榜';

        return view("front/dingzhi",$this->data);
    }

    public function dingzhisave(){
        $res = array();
        $data = array();
        $id = Request::get('id','0');
        $customized_name = Request::get('customized_name');
        $style = Request::get('style');
        $budget = Request::get('budget');
        $phone = Request::get('phone');
        $name = Request::get('name');
        $city = Request::get('city');
        $linkurl = Request::get('linkurl');
        if($customized_name){
            $data['customized_name'] = $customized_name;
        }
        if($style){
            $data['style'] = $style;
        }
        if($budget){
            $data['budget'] = $budget;
        }
        if($phone){
            $data['phone'] = $phone;
        }
        if($name){
            $data['name'] = $name;
        }
        if($city){
            $data['city'] = $city;
        }
        if($linkurl){
            $data['linkurl'] = $linkurl;
        }
        $data['visitState'] = 2;

        $created_at = date('Y-m-d H:i:s',time());
        $data['created_at'] = $created_at;

        $result = DB::table("yfc_customized")->insert($data);
        $res['result'] = '00';

        return json_encode($res);

    }
    public function saveview(){
        //`source` smallint(6) DEFAULT NULL COMMENT '1套系，2表示推荐榜单，3客片，4客户页面',
        $phone = Request::get('phone');
        $tenantsId = Request::get('tenantsId');
        $data['phone'] = $phone;
        $data['tenantsId'] = $tenantsId;
        $data['source'] = Request::get('source','1');
        $backres = DB::table('yfc_bespoke_view')->insert($data);
        if($backres){
            $res['result'] = '00';
        }else{
            $res['result'] = '01';
        }
        return json_encode($res);
    }

    public function dafen($name,$id=0){
        $this->data['city'] = Config::get('city.'.$name,'北京');
        $this->data['tenants'] = Yfctenants::where('id',$id)->first();
        $this->data['title'] = $this->data['tenants']['name'].'打分-有榜';

        return view("front/dianping",$this->data);
    }

    /**
     * 评价的保存
     */
    public function savevote(){
        $data = array();
        $city = Request::get('city');
        $id = Request::get('id');//商家的id
        $score = Request::get('score');//评分
        $content = Request::get('content');//总体
        $user_bill = Request::get('user_bill');//单据证明(数据类型是数组)
        $photo = Request::get('user_photo');//用户照片(数据类型是数组)
        $head = Request::get('headimg');//用户头像
        $username = Request::get('userName');//用户名称
        $phone = Request::get('phone');//用户名称
        $price = Request::get('price');//消费金额
        if($score<0){
            $data['type'] = 3;
        }else if($score>=15){
            $data['type'] = 1;
        }else{
            $data['type'] = 2;
        }
        $data['score'] = $score;
        $data['totailty'] = $content;
        $data['documentary'] = json_encode($user_bill);
        $data['headimg'] = json_encode($head);
        $data['photo'] = json_encode($photo);
        $data['name'] = $username;
        $data['phone'] = $phone;
        $data['tenantsId'] = $id;
        $data['created'] = time();
        $data['source'] = 0;
        $data['created'] = time();
        $data['price'] = $price;
        DB::table("yfc_tenants_comment_detail")->insert($data);
        $url = '/detail/'.$id;
        echo '<html>';
        echo '<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>';
        echo "<SCRIPT language=Javascript> alert('打榜成功');
			window.location.href='$url';
			</SCRIPT>";
        echo '</html>';
        exit();
    }
}

