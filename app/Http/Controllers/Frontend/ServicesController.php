<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        return view('frontend.services');
    }

    public function software_solutions(){
        return view('frontend.software_solutions');
    }

    public function graphics_design(){
        return view('frontend.graphics_design');
    }

    public function functional_resume(){
        return view('frontend.functional_resume');
    }

    public function social_media_marketing(){
        return view('frontend.social_media_marketing');
    }

    public function ui_ux_design(){
        return view('frontend.ui_ux_design');
    }

    public function brand_identity(){
        return view('frontend.brand_identity');
    }
}
