<?php
namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Merchant;
use App\Http\Helper\Msg;
use App\Http\Models\YfcTenants;
use App\Http\Models\YfcTenantsPic;
use App\Http\Models\YfcTenantsSet;
use Illuminate\Http\Request;

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
        return view("merchant/welcome");
    }


    public function addset(Request $request)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'setName' => $request->get("setName"),
                'cover' => json_encode($request->get("imageurl",[]),JSON_UNESCAPED_UNICODE),
                'picDetail' =>  json_encode($request->get("imageurl",[]),JSON_UNESCAPED_UNICODE),
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
            $trends = ['time' => time(),'content' => '更新了最新套系《'.$data['setName'].'》'];
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
                'cover' => json_encode($request->get("imageurl",[]),JSON_UNESCAPED_UNICODE),
                'firstcover' => json_encode([$request->get('imageurl',[])[0]??''],JSON_UNESCAPED_UNICODE),
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
            $trends = ['time' => time(),'content' => '更新了最新案例《'.$data['picname'].'》'];
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
            $name = trim($request->input('name'));
            YfcTenants::where("id" ,'=',$this->tid)->update(["package"=>$name]);
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
}

