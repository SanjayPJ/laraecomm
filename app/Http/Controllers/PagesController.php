<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('main');
    }

    public function products(){
    	return view('products');
    }

    public function product(){
    	return view('product');
    }

    public function cart(){
    	return view('cart');
    }

    public function checkout(){
    	return view('checkout');
    }

    public function thankyou(){
    	return view('thankyou');
    }
}
