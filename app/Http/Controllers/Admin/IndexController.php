<?php
namespace App\Http\Controllers\Admin;

use App\Http\Helper\Msg;
use App\Http\Models\Merchant;
use App\Http\Models\YfcAsk;
use App\Http\Models\YfcAskAnswer;
use App\Http\Models\YfcBespokeView;
use App\Http\Models\YfcTenants;
use App\Http\Models\YfcTenantsPic;
use App\Http\Models\YfcTenantsSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request as FileRequest;
use Illuminate\Database\QueryException;
use Mockery\CountValidator\Exception;

//待确认功能
class IndexController extends AdminController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view("admin/index" , ['user' => $this->user]);
    }


    public function welcome(Request $request)
    {

        //echo "<pre>" ;
        //print_r($this->data);exit;
        $this->data = [];
        return view("admin/welcome",$this->data);
    }

    public function xpokelist(){
        $this->data['poke'] = DB::table("yfc_bespoke_view")->orderby("id","desc")->paginate(20, ['*'],  'page');

        return view("admin/xpokelist",$this->data);
    }
    public function poke(){
        $this->data['poke'] = DB::table("yfc_bespoke_view")->orderby("id","desc")->where("type",'>','0')->paginate(20, ['*'],  'page');

        return view("admin/poke",$this->data);
    }

    public function pokesucc(Request $request){
        $id = $request->input("id");

        $poke = YfcBespokeView::where(['id'=>$id])->first();

        if($poke['poketype'] != 1) {
            Msg::js("数据已经处理");
        }
        if($poke['type'] != 1) {
            Msg::js("免费用户，不做处理");
        }


        $data = [
            'type' => 0,
            'poketype' => 3
        ];

        DB::beginTransaction();
        try {
            YfcBespokeView::where(['id' => $poke['id']])->update($data);
            Merchant::where(['tid' => $poke['tenantsId']])->update(["balascore" => DB::Raw("balascore+".$poke["score"])]);
            #QueryException
        } catch (Exception $e) {
            DB::rollback();
            Msg::js("失败");
            return ;
        }

        DB::commit();
        Msg::js("处理成功");
    }

    public function pokeerror(Request $request){
        $id = intval($request->input("id"));

        $poke = YfcBespokeView::where(['id'=>$id])->first();

        if($poke['poketype'] != 1) {
            Msg::js("数据已经处理");
        }
        if($poke['type'] != 1) {
            Msg::js("免费用户，不做处理");
        }

        YfcBespokeView::where(['id'=>$id])->update(['poketype'=>2]);
        Msg::js("处理成功");
    }

    public function askNew(){

        return view("/admin/asknew");
    }

    public function  askNewPost(Request $request){

        set_time_limit(0);
        $name = $request->input("name");

        $citystring1 = "南京,厦门,合肥,哈尔滨,大连,宁波,广州,成都,无锡,杭州,武汉,沈阳,深圳,石家庄,苏州,西安,郑州,长沙,青岛,天津,上海,北京,重庆";
        $citystring1 .= ',长春,福州,佛山,东莞,太原,南昌,南宁,昆明,济南,温州,唐山,贵阳,海口,兰州,银川,泉州,南通,大庆,徐州,潍坊,常州,绍兴,济宁,盐城,临沂,洛阳,扬州,嘉兴,镇江,金华,保定,泰安,宜昌,襄阳,惠州,威海,淮安,江门,芜湖,湛江,廊坊,宝鸡,珠海,绵阳,三亚,蚌埠,长治,滁州,桂林,汉中,衡阳,湖州,焦作,锦州,马鞍山,莆田,秦皇岛,汕头,邢台';
        $text = file("/home/chen/youbang2/shell/name.txt");
        foreach(explode(",",$citystring1) as $v) {
            foreach(["婚纱摄影",'婚礼策划'] as $v2) {

                $tenants = YfcTenants::where("city","=",$v)
                    ->where("shoptype",",",$v2)
                    ->where("order_city",">=",1)
                    ->where("order_city","<=",10)
                    ->get();
                if(!empty($tenants)) {
                    $tenants = $tenants[rand(0,count($tenants)-1)];

                    $comment = DB::table("web_com.dianping_".($v2=="婚纱摄影"?"hunsha":"hunqing")."_comments")
                        ->where("shop_url","=",$tenants['url'])
                        ->where("stars","=",5)
                        ->limit(100)
                        ->get();
                    if($comment < 5) {
                        continue;
                    }

                    $title = $v.$v2.$name;
                    $data = [
                        'tid' => $v['id'],
                        'city' => $v['positionCity'],
                        'name' => names($text),
                        'title' => $title,
                    ];

                    $aid = YfcAsk::insert($data);
                    if(!$aid) {
                        print_r($data);
                    }
                    $c = rand(3,5);
                    $cc = count($comment);


                    for($i = 0 ; $i < $c;$i ++) {
                        if($cc<1) {
                            return [];
                        }
                        $key = rand(0,$cc-1);
                        $asks = $comment[$key];
                        unset($comment[$key]);
                        $comment = array_values($comment);
                        $cc = $cc -1;

                        $data = [
                            'tid' => $v['id'],
                            'aid' => $aid,
                            'name' => names($text),
                            'content' => $asks['content']
                        ];
                        $qid = YfcAskAnswer::insert($data);
                        if(!$qid) {
                            print_r($data);exit;
                        }
                    }
                }
            }
        }
    }
}


function names ( $txt ){
    $name = $txt[rand(0,count($txt)-1)];
    $name = str_replace("\t","",$name);
    $name = str_replace("\n","",$name);
    return $name;
}
