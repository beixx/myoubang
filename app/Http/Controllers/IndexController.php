<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Helper\Msg;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;


//待确认功能
class IndexController extends Controller
{
    public function index($name = 'beijing' ,$id = 'sheying' )
    {
        # 过滤非法的url
        if($id!='sheying' && $id!="hunli" && !is_numeric($id)){
            return Redirect::to('/');
        }

        if($id!='sheying' && $id!="hunli"){
            $tenantinfo = DB::table("yfc_tenants")->where('id',$id)->first();
            print_r($tenantinfo) ;exit;
            $city = $tenantinfo->city;
            $pycity = Config::get('city.'.$city,'beijing');
            Session::put('city',$city);
            $tenantdatas = Yfctenantsdata::where('tenants_id',$id)->get();
            $tenantsets = Yfctenantsset::where('tenantsId',$id)->orderBy('recommend','asc')->skip(0)->take(8)->get();

            foreach($tenantsets as $key=>$v){
                if(isset($v->kind) && $v->kind){
                    $v->kind = json_decode($v->kind,true);
                }
                if(isset($v->cover) && $v->cover){
                    $v->cover = json_decode($v->cover,true);
                }
                if(isset($v->picDetail) && $v->picDetail){
                    $v->picDetail = json_decode($v->picDetail,true);
                }
                $tenantsets[$key] = $v;
            }
            $countsets = Yfctenantsset::where('tenantsId',$id)->count();
            $setnums = ceil($countsets/8);
            $tenantpics = Yfctenantspic::where('tenantsId', $id)->skip(0)->take(4)->get();
            foreach($tenantpics as $k => $t){
                if(isset($t->cover) && $t->cover){
                    $t->cover = json_decode($t->cover,true);
                }
                if(isset($t->firstcover) && $t->firstcover){
                    $t->firstcover = json_decode($t->firstcover,true);
                }
                if(isset($t->picStyle) && $t->picStyle){
                    $t->picStyle = json_decode($t->picStyle,true);
                }
                $tenantpics[$k] = $t;
            }
            $countpics = Yfctenantspic::where('tenantsId',$id)->count();
            $picnums = ceil($countpics/4);

            $comments = Yfctenantscommentdetail::where('tenantsId',$id)->skip(0)->take(20)->orderBy('created','desc')->get();
            $counts = Yfctenantscommentdetail::where('tenantsId',$id)->count();
            $allpages = ceil($counts/20);
            //$goods = Yfctenantscommentdetail::where('tenantsId',$id)->where('score','>=',15)->count();
            //$averages = Yfctenantscommentdetail::where('tenantsId',$id)->where('score','>=',0)->where('score','<',15)->count();
            //$bads = Yfctenantscommentdetail::where('tenantsId',$id)->where('score','<',0)->count();
            //$haspics = Yfctenantscommentdetail::where('tenantsId',$id)->where('photo','!=','')->count();
            //$hasdans = Yfctenantscommentdetail::where('tenantsId',$id)->where('documentary','!=','')->count();
            $searchs = Yfcdaysearch::take(30)->where('tenantsId',$id)->orderBy('id','desc')->get();
            $searchinfo =  Yfcdaysearch::where('tenantsId',$id)->orderBy('id','desc')->first();
            $ctime = time();
            $advinfo = '';
            if($tenantinfo->isVip==2){
                $advinfo = Yfcadv::where('type','2')->where('position','3')->where('tenantsId',$id)->where('endTime','>',$ctime)->first();
            }else{
                if($tenantinfo->shoptype == '婚纱摄影'){
                    $advinfo = Yfcadv::where('type','1')->where('position','3')->where('city', 'like', '%'.$pycity.'%')->where('advtype','1')->where('endTime','>',$ctime)->first();
                }else{
                    $advinfo = Yfcadv::where('type','1')->where('position','3')->where('city', 'like', '%'.$pycity.'%')->where('advtype','2')->where('endTime','>',$ctime)->first();
                }
            }
            $shoptype = $tenantinfo->shoptype;
            $dbtenants = Yfctenants::where('city', 'like', '%'.$city.'%')->where('shoptype',$shoptype)->skip(0)->take(50)->orderBy('order_city','asc')->get();
            $title = $tenantinfo->name.' _有榜'.$tenantinfo->shoptype.'行业榜单「第'.$tenantinfo->order_city.'名」';
            $desc = $tenantinfo->name.'在'.$tenantinfo->city.'地区婚纱摄影行业综合排名第{'.$tenantinfo->order_city.'}名，该商户在品牌榜单中排名第{'.$tenantinfo->order_city.'}名，好评榜单中排名第{'.$tenantinfo->order_city.'}名，希望能够帮助您了解到{'.$tenantinfo->name.'}怎么样的问题。';
            $keyword = $tenantinfo->name.', '.$tenantinfo->name.'怎么样, '.$tenantinfo->name.'行业第'.$tenantinfo->order_city.'名';
            return View::make('front.shop', array('tenantinfo' => $tenantinfo,'dbtenants'=>$dbtenants,'title'=>$title,'desc'=>$desc,'keyword'=>$keyword,'pycity' => $pycity,'tenantdatas'=>$tenantdatas,'tenantsets'=>$tenantsets,'advinfo'=>$advinfo,'countsets'=>$countsets,'tenantpics'=>$tenantpics,'countpics'=>$countpics,
                'setnums'=>$setnums,'picnums'=>$picnums,'searchinfo'=>$searchinfo,'comments'=>$comments,'counts'=>$counts,'allpages'=>$allpages,'city'=>$city,'searchs'=>$searchs ));

        }else{
            $page = Request::get('page','1');
            $city = Config::get('city.'.$name,'北京');
            $this->data['city'] = $city;
            if($id=='sheying'){
                $shoptype = '婚纱摄影';
            }else{
                $shoptype = '婚礼策划';
            }
            $size = 10;
            $index = ($page-1)*20;

            $this->data['tenants'] = DB::table("yfc_tenants")
                ->where('city', 'like', '%'.$city.'%')
                ->where('shoptype',$shoptype)
                ->where('spread','!=','2')
                ->skip($index)->take($size)
                ->orderBy('order_city','asc')->get()->toArray();

            $spread = DB::table("yfc_tenants")
                ->where('city', 'like', '%'.$city.'%')
                ->where('shoptype',$shoptype)
                ->where('spread','!=','2')
                ->orderBy('order_city','asc')->limit(1)->get()->toArray();

            $this->data['spread'] = empty($spread[0])? []:$spread;
            echo '<pre>' ;
            print_r($this->data['tenants']);
            print_r($this->data['spread']) ;exit;
            foreach($this->data['tenants'] as $k =>$v) {
                if($v->isVip != 2){
                    $taoxis = DB::table('yfc_tenants_set')->where('tenantsId',$v->id)->orderBy('recommend','asc')->limit(3)->get();

                    foreach($taoxis as $kk => $vv) {
                        if($vv->cover){
                            $vv->cover = json_decode($vv->cover,true);
                        }
                        $taoxis[$k] = $vv;
                    }
                    $v->taoxis = $taoxis;
                    $tenants[$k] = $v;
                }
            }
            $this->data['title'] = '「有榜'.$shoptype.'榜单」'.$city.$shoptype.'前十名_'.$city.$shoptype.'排名';
            $this->data['desc'] = '「有榜」依托'.$shoptype.'行业大数据，为您提供实时更新、用户打分的'.$city.$shoptype.'榜单（包含'.$city.$shoptype.'前十名），而且您也可以自由的定制'.$city.$shoptype.'排行榜。';
            $this->data['keyword'] = $city.$shoptype.'前十名,'.$city.$shoptype.'排行榜,'.$city.$shoptype.'排名 ';

            $advtype = $shoptype=='婚纱摄影'?1:2;

            $advinfo = DB::table("yfc_adv")->where('type','1')->where('position','1')->where('city', 'like', '%'.$name.'%')->where('advtype',$advtype)->where('endTime','>',time())->first();

            return view('front/index', $this->data);

        }
    }

    public function search($name=''){
        $page = Input::get('page','1');
        $city = Config::get('city.'.$name,'北京');
        $keyword = Input::get('keyword','');
        $size = 20;
        $index = ($page-1)*20;
        $tenants = Yfctenants::where('city', 'like', '%'.$city.'%')->where('name', 'like', '%'.$keyword.'%')->skip($index)->take($size)->orderBy('order_city','asc')->get();
        $count = Yfctenants::where('city', 'like', '%'.$city.'%')->where('name', 'like', '%'.$keyword.'%')->skip($index)->take($size)->count();
        $allpages = ceil($count/20);
        if(count($tenants)){
            foreach($tenants as $key=>$v){
                if($v->isVip == 2){
                    $taoxis = Yfctenantsset::where('tenantsId',$v->id)->select('id','setName','price','currentPrice','cover')->get();
                    if(count($taoxis)){
                        foreach($taoxis as $k=>$t){
                            if($t->cover){
                                $t->cover = json_decode($t->cover,true);
                            }
                            $taoxis[$k] = $t;
                        }
                    }
                    $v->taoxis = $taoxis;
                    $tenants[$key] = $v;
                }
            }
        }

        $dbtenants = Yfctenants::where('city', 'like', '%'.$city.'%')->skip(0)->take(50)->orderBy('order_city','asc')->get();
        $title = $keyword.'在'.$city.'的搜索结果-有榜';
        return View::make('front.search')->with('dbtenants',$dbtenants)->with('tenants',$tenants)->with('allpages',$allpages)->with('pycity',$name)->with('count',$count)->with('city',$city)->with('keyword',$keyword)->with('title',$title);
    }


    public function taoxi($tid = 0){
        $tenantsinfo = Yfctenants::where('id',$tid)->first();
        $tenantsId = $tid;
        $name = $tenantsinfo->name;
        $city = $tenantsinfo->city;
        $pycity = Config::get('city.'.$city,'beijing');
        $phone = $tenantsinfo->phone;
        $info = Yfctenantsset::where('id',$id)->first();
        $txname = $info->setName;
        $remmends = Yfctenantsset::where('id','!=',$id)->where('tenantsId',$tenantsId)->skip(0)->take(8)->get();
        if(count($remmends)){
            foreach($remmends as $key=>$v){
                if($v->cover){
                    $v->cover = json_decode($v->cover,true);
                }
                if($v->picDetail){
                    $v->picDetail = json_decode($v->picDetail,true);
                }
                if($v->kind){
                    $v->kind = json_decode($v->kind,true);
                }
                $remmends[$key] = $v;
            }
        }
        if($info->cover){
            $info->cover = json_decode($info->cover,true);
        }
        if($info->picDetail){
            $info->picDetail = json_decode($info->picDetail,true);
        }
        if($info->kind){
            $info->kind = json_decode($info->kind,true);
        }
        $shoptype = $tenantsinfo->shoptype;
        $dbtenants = Yfctenants::where('city', 'like', '%'.$city.'%')->where('shoptype',$shoptype)->skip(0)->take(50)->orderBy('order_city','asc')->get();
        $title =  $txname.' _'.$name.'-有榜 ';
        $desc = '通过有榜预定'.$txname.'原价'.$info->price.'，现价只需'.$info->currentPrice.'，赶快预定，机会难得！';
        $keyword = $txname;
        return View::make('front.detailtaoxi')->with('dbtenants',$dbtenants)->with('title',$title)->with('desc',$desc)->with('keyword',$keyword)->with('pycity',$pycity)->with('tenantsId',$tenantsId)->with('city',$city)->with('tenantsinfo',$tenantsinfo)->with('txname',$txname)->with('phone',$phone)->with('name',$name)->with('info',$info)->with('remmends',$remmends);
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
}

