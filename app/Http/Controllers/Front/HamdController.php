<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HamdController extends Controller
{
    //

    public function index()
    {
        return view ('front.home.home');
    }

    public function shop()
    {
        return view('front.shop.shop');
    }

    public function details()
    {
        return view('front.product.details');
    }
}
