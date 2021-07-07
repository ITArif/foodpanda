<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VbrController extends Controller
{
    public function vbrList(){
    	return view('vbr.vbe_list');
    }

    public function myCustomer(){
    	return view('vbr.customer_list');
    }

    public function couponGenerate(){
    	return view('vbr.coupon_generate');
    }

    public function createCustomer(){
    	return view('vbr.create_customer');
    }
}
