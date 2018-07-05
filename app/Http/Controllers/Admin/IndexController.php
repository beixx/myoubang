<?php
namespace App\Http\Controllers\Admin;

use App\Http\Helper\Msg;
use App\Http\Models\Merchant;
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


    public function poke(){
        $this->data['poke'] = DB::table("yfc_bespoke_view")->orderby("id","desc")->paginate(20, ['*'],  'page');

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


}

