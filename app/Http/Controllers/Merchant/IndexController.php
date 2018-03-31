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
                'kind' => json_encode(explode(',',$request->get("kind"),[]),JSON_UNESCAPED_UNICODE),
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
                'firstcover' => json_encode([$request->get('imageurl',[])[0]],JSON_UNESCAPED_UNICODE),
                'picstyle' => json_encode(explode(',',$request->get("picstyle"),[]),JSON_UNESCAPED_UNICODE),
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
        $this->data['data'] = $pic->where(['tenantsId' =>$this->tid ])->get();
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
        $this->data['data'] = $set->where(['tenantsId' =>$this->tid ])->get();
        return view("merchant/setlist" , $this->data);
    }

    public function setdel(Request $request){
        $id = intval($request->get('id'));
        $set = new YfcTenantsSet();
        $this->data['data'] = $set->where(['tenantsId' =>$this->tid,'id'=>$id ])->delete();
        Msg::js('删除结束','/merchant/yfctenantsset');
    }
}

