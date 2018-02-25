<?php
namespace App\Http\Controllers\merchant;


//待确认功能
class IndexController extends Controller
{

    public function index()
    {
        echo 11;exit;
    }

    public function login(){
        return view("merchant/login");
    }

}

