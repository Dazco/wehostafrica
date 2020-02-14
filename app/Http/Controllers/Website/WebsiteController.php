<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function home(){
        return view('website.home');
    }
    public function share(){
        return view('website.share');
    }
    public function resell(){
        return view('website.resell');
    }
    public function dedicate(){
        return view('website.dedicate');
    }
    public function vps(){
        return view('website.vps');
    }
    public function domain_reg(){
        return view('website.domain_reg');
    }
    public function transfer(){
        return view('website.transfer');
    }
    public function personal(){
        return view('website.personal');
    }
    public function pay(){
        return view('website.pay');
    }


}
