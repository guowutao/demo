<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    	// 1.未登录跳转至登录页面
    	// ...
    	// 2.登录的话就转至个人主页
    	return view('User.home');
    }
}
