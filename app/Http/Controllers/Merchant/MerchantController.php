<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Helper\Msg;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;

// 工作台
class MerchantController extends Controller
{
    # 权限验证
    protected $role  = 1;
    # 是否需要登录
    public $data = array();

    protected $uid = 0;
    protected $user ;
    protected $tid ;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            ($request->session()->all());
            $uid = $request->session()->get("uid");

            if(!$uid || $uid <1) {
                redirect("merchant/login");
            }
            $this->uid = $uid;
            $this->user = $request->session()->get("user");
            $this->tid = $request->session()->get("tid");

            return $next($request);
        });

    }

}
