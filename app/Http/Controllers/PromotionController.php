<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionController extends Controller
{
    //
    public function index(){
        return view('promotion.pro_dashboard');
    }

    public function pro_manage(){
        return view('promotion.pro_manage');
    }

    public function pro_join(){
        return view('promotion.pro_join');
    }

    public function check(){
        return view('promotion.pro_check');
    }

    public function add_reduce(){
        return view('promotion.pro_add_reduce');
    }

    public function pro_approve(){
        return view('promotion.pro_approve');
    }
}
