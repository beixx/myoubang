<?php
namespace App\Http\Controllers\Merchant;

use App\Http\Helper\Msg;
use App\Http\Models\Merchant;
use App\Http\Models\YfcBespokeView;
use App\Http\Models\YfcTenants;
use App\Http\Models\YfcTenantsPic;
use App\Http\Models\YfcTenantsSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request as FileRequest;

//待确认功能
class IndexController extends MerchantController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view("merchant/index" , ['user' => $this->user]);
    }


    public function welcome(Request $request)
    {
        # 查询用户
        $merchant = new Merchant();

        $user = $merchant->where(array('id'=>$this->user['id']))->first();
        $this->data["c1"] = DB::table("yfc_bespoke_view")->where("tenantsId" ,"=",$this->tid)
            ->where("ctime" , '>',strtotime(date("Y-m-d")))->count();
        $this->data["c2"] = DB::table("yfc_bespoke_view")->where("tenantsId" ,"=",$this->tid)
            ->where("ctime" , '>',strtotime(date("Y-m-d"))-86400*6)->count();
        $this->data["c3"] = DB::table("yfc_bespoke_view")->where("tenantsId" ,"=",$this->tid)
            ->where("ctime" , '>',strtotime(date("Y-m-01")))->count();

        $this->data['conscore'] = YfcBespokeView::where("type","=","1")->where("tenantsId" ,"=",$this->tid)->sum("score");

        $this->data['poke'] = DB::table("yfc_bespoke_view")->orderby("id","desc")->where("tenantsId" ,$this->tid)->paginate(20, ['*'],  'page');
        $this->data['user'] = $user;

        $this->data['poketype'] = [
            "未申诉",'已申诉',"驳回","申诉成功",
        ];
        //echo "<pre>" ;
        //print_r($this->data);exit;
        return view("merchant/welcome",$this->data);
    }


    public function addset(Request $request)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'setName' => $request->get("setName"),
                'cover' => json_encode($request->get("cover",[]),JSON_UNESCAPED_UNICODE),
                'picDetail' =>  json_encode($request->get("picDetail",[]),JSON_UNESCAPED_UNICODE),
                'kind' => json_encode(explode(',',$request->get("kind",'')),JSON_UNESCAPED_UNICODE),
                'detail' => $request->get('detail'),
                'taoxiexplain' => $request->get('taoxiexplain'),
                'price' => $request->get('price'),
                'currentPrice' => $request->get('currentprice'),
                'item' => $request->get('item'),
                //'source' => 2,
                'tenantsId' => $this->tid,
                'created_at' => time(),
                'updated_at' => time(),
            ];

            $set = new YfcTenantsSet();
            if($request->get('id') >0) {
                $set->where(['id'=>$request->get('id'),'tenantsId'=>$this->tid])->update($data);
            }
            else {
                $set->insert($data);
            }
            $trends = ['time' => time(),'content' => '商家新增套系'];
            Yfctenants::where("id",'=',$data['tenantsId'])->update(['trends'=>json_encode($trends)]);
            Msg::js('编辑成功','/merchant/yfctenantsset');
            exit;
        }
        $this->data['tid'] = $this->tid;

        if($request->get('id',0)>0) {
            $set = new YfcTenantsSet();
            $this->data['set'] = $set->where([
                'id' => $request->get('id'),
                'tenantsId' => $this->tid,
                //'source' => 2,
            ])->first();

            if(empty($this->data['set'])) {
                Msg::js('无权限编辑','/merchant/yfctenantsset');
            }
        }
        return view("merchant/addset" , $this->data);
    }

    public function addpic(Request $request)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'picname' => $request->get("picname"),
                'cover' => json_encode($request->get("cover",[]),JSON_UNESCAPED_UNICODE),
                'firstcover' => json_encode($request->get('firstcover',[]),JSON_UNESCAPED_UNICODE),
                'picstyle' => json_encode(explode(',',$request->get("picstyle",'')),JSON_UNESCAPED_UNICODE),
                'explain' => $request->get('explain'),
                //'source' => 2,
                'tenantsId' => $this->tid,
                'created_at' => time(),
                'updated_at' => time(),
            ];

            $style = new YfcTenantsPic();
            if($request->get('id') >0) {
                $style->where(['id'=>$request->get('id'),'tenantsId'=>$this->tid])->update($data);
            }
            else {
                $style->insert($data);

                $count = YfcTenantsPic::where("tenantsid",'=',$this->tid)->count();

                YfcTenants::where("id",'=',$this->tid)->update(['piccount' => $count]);
            }
            $trends = ['time' => time(),'content' => '商家新增客片'];
            Yfctenants::where("id",'=',$data['tenantsId'])->update(['trends'=>json_encode($trends)]);
            Msg::js('编辑成功','/merchant/yfctenantspic');
            exit;
        }
        $this->data['tid'] = $this->tid;

        if($request->get('id',0)>0) {
            $pic = new YfcTenantsPic();
            $this->data['pic'] = $pic->where([
                'id' => $request->get('id'),
                'tenantsId' => $this->tid,
                //'source' => 2,
            ])->first();
            if(empty($this->data['pic'])) {
                Msg::js('无权限编辑','/merchant/yfctenantspic');
            }
        }
        return view("merchant/addpic" , $this->data);
    }

    public  function yfctenantspic(){
        $pic = new YfcTenantsPic();
        $this->data['data'] = $pic->where(['tenantsId' =>$this->tid ])->orderby("id",'desc')->get();
        return view("merchant/piclist" , $this->data);
    }
    public  function picdel(Request $request){
        $id = intval($request->get('id'));
        $pic = new YfcTenantsPic();
        $this->data['data'] = $pic->where(['tenantsId' =>$this->tid,'id'=>$id ])->delete();
        Msg::js('删除结束','/merchant/yfctenantspic');
    }

    public function yfctenantsset(){
        $set = new YfcTenantsSet();
        $this->data['data'] = $set->where(['tenantsId' =>$this->tid ])->orderby("id",'desc')->get();
        return view("merchant/setlist" , $this->data);
    }

    public function setdel(Request $request){
        $id = intval($request->get('id'));
        $set = new YfcTenantsSet();
        $this->data['data'] = $set->where(['tenantsId' =>$this->tid,'id'=>$id ])->delete();
        Msg::js('删除结束','/merchant/yfctenantsset');
    }
    public function setpackage(Request $request){
        $this->data['tenants'] = YfcTenants::where("id",'=',$this->tid)->first()->toArray();
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //print_r($_POST);EXIT;
            $name = trim($request->input('name'));
            $data = [
                "package"=>$name,
                'bespoke' => trim($request->input("bespoke")),
                "price" =>intval($request->input("price")),
                "racket" =>intval($request->input("racket")),
                "address" =>trim($request->input("address")),
                "area" =>trim($request->input("area")),
            ];
            YfcTenants::where("id" ,'=',$this->tid)->update($data);
            Msg::js('设置成功','/merchant/setpackage');
        }
        return view("merchant/setpackage" , $this->data);
    }

    public function  fileupload(){
        if(empty($_FILES))
            die(json_encode(array('code'=>-1,'msg'=>'error')));

        $file = $_FILES['file'];
        if($file['error']!=0 || $file['size']< 1 ){
            die(json_encode(array('code'=>-1,'msg'=>'error','id'=>$_POST['id'])));
        }

        $uploadDir = '/Server/data/image/upload';

        $filedir = '/merchant/'.substr(md5(rand(1,10000)),0,3).'/'.substr(md5(rand(1,10000)),0,3).'/'.substr(md5(rand(1,10000)),0,3);
        $uploadDir .= $filedir ;
        $fileName = md5(rand(1,10000)).'.jpg';

        if(!is_dir($uploadDir)) {
            mkdir($uploadDir,0777,true);
        }


        move_uploaded_file( $file['tmp_name'],$uploadDir. $fileName);

        echo json_encode( array( 'code'=>0, 'msg'=>'ok', 'imageUrl'=>$filedir.$fileName ) );


    }
    public function  filedel(){

    }


    public function filesave(){
        $res = array();
        $imageurls = array();
        $images = FileRequest::file('photo');
        if(count($images)){
            foreach($images as $key=>$v){

                $uploadDir = '/Server/data/image/upload';

                $filedir = '/merchant/'.substr(md5(rand(1,10000)),0,3).'/'.substr(md5(rand(1,10000)),0,3).'/'.substr(md5(rand(1,10000)),0,3);
                $uploadDir .= $filedir ;
                $fileName = md5(rand(1,10000)).'.jpg';

                if(!is_dir($uploadDir)) {
                    mkdir($uploadDir,0777,true);
                }

                $v->move($uploadDir, $fileName);

                $imageurls[] = $filedir.'/'.$fileName;
            }
            $res['list'] = $imageurls;
            $res['result'] = '00';
            return json_encode($res);
        }else{
            $res['message']='图片上传失败';
            $res['result']='01';
            return json_encode($res);
        }
    }

    public function poke(Request $request){
        $id = intval($request->input("id"));
        $type = intval($request->input("type"));
        $poke = YfcBespokeView::where(['id' => $id,'tenantsId' => $this->tid])->first();

        if(empty($poke)) {
            return json_encode(["result"=> '01',"msg" => "数据找不到"]);
        }
        if($poke['poketype']==2 || $poke['poketype']==3) {
            return json_encode(["result"=> '01','msg'=> "数据已经处理完成"]);
        }
        if($poke['type']==0) {
            return json_encode(["result"=> '01','msg'=> "免费数据，不做处理"]);
        }
        $data = [
            "poketype" => 1 ,
            'pokemsg' => "该信息已从其他平台获取",
        ];

        $res['result'] = '00';
        if(YfcBespokeView::where(['id' => $id,'tenantsId' => $this->tid])->update($data)){
            $res['result'] == "00";
        }
        return json_encode(["result"=>'00',"msg" => "申诉成功"]);
    }


}

