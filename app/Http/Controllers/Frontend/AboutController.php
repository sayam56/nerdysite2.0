<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('frontend.about');
    }

    public function faq(){
        return view('frontend.faq');
    }

    public function teams(){
        return view('frontend.teams');
    }

    public function terms_conditions(){
        return view('frontend.terms');
    }

    public function privacy_policy(){
        return view('frontend.privacy');
    }


}
