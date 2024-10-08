<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Banner;
class HomeController extends Controller
{
    public function index()
    {

        $template = 'admin.home.index';
        toastr()->success('Đăng nhập thành công');
        return view ('admin.dashboard',compact('template'));
    }

    public function user_index()
    {
        $banners = Banner::all();
        $template = 'user.home.index';
        toastr()->success('dang nhap thanh cong');
        return view('user.dashboard',compact('template', 'banners'));
    }

    public function user_profile()
    {
        $template = 'user.profile.home';
        return view('user.dashboard',compact('template'));
    }

    public function welcome()
    {
        $template = 'user.home.index';
        return view('welcome',compact('template'));
    }

//USER LOG



    public function log_index()
    {
        $banners = Banner::all();
        $template = 'user_log.home.index';
        return view('user_log.dashboard', compact('template', 'banners'));
    }






}
