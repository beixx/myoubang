<?php
namespace App\Http\Controllers\merchant;

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
        return view("merchant/login");
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
        # 存入session
        session(array('uid'=>$user['id'],'user'=>$user,'tid'=>$user['tid']));

        return $this->returnAjax('登录成功',1);
    }

    # 推出登录
    public function logout()
    {
        session()->flush();
        return redirect('/');
    }

}

