<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\Merchant;
use App\Http\Models\YfcTenants;
use Illuminate\Http\Request;
use App\Http\Helper\Validate;
use Illuminate\Support\Facades\DB;

//待确认功能
class LoginController extends Controller
{

    public function login(){
        return view("admin/login");
    }

    #  登录验证
    public function check(Request $request)
    {
        # 获取账号密码
        $username = $request->get('name');
        $password = $request->get('password');
        # 校验账号的规则
        if(!Validate::safe($username)) {
            return $this->returnAjax('账号错误');
        }
        # 查询用户
        /*
        $merchant = new Merchant();
        $user = $merchant->where(array('username'=>$username))->first();

        if(empty($user)) {
            return $this->returnAjax('用户未注册');
        }
        # 密码校验
        if(md5($password)!= $user['password']) {
            return $this->returnAjax('密码错误');
        }
        $tenants = YfcTenants::where(['id'=>$user['tid']]);
        if(empty($tenants)) {
            return $this->returnAjax('密码错误');
        }
        */
        if($username != 'admin' || $password != "a123456") {
            return $this->returnAjax('密码错误');
        }
        # 存入session
        session(array('uid'=>1,'user'=>['uid' => 1 ,'name'=>'admin']));

        return $this->returnAjax('登录成功',1);
    }

    # 推出登录
    public function logout()
    {
        session()->flush();
        return redirect('/merchant/login');
    }

}

