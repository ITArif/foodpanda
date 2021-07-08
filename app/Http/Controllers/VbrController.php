<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class VbrController extends Controller
{
    public function vbrList(){
    	return view('vbr.vbe_list');
    }

    public function myCustomer(){
        $customers=Customer::all();
        //dd($customers);
    	return view('vbr.customer_list')->with(compact('customers'));
    }

    public function couponGenerate(){
    	return view('vbr.coupon_generate');
    }

    public function createCustomer(){
    	return view('vbr.create_customer');
    }

    public function addCustomer(Request $request){
             $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:customers',
            'mobile'=>'required',
            ]);

            $chars = "BSH@KSS0171";
            $coupon_code = "";
            for ($i = 0; $i < 6; $i++) {
                $coupon_code .= $chars[mt_rand(0, strlen($chars)-1)];
            }

             $customer=new Customer;
             $customer->name=$request->name;
             $customer->email=$request->email;
             $customer->mobile=$request->mobile;
             $customer->date_of_birth=$request->date_of_birth;
             $customer->location=$request->location;
             $customer->entry_date=$request->entry_date;
             $customer->coupon_code=$coupon_code;
             $customer->status=$request->status;
             
             $customer->save();
             return redirect()->back()->with('success','Customer Created Successfully!');
    }

    public function createVbr(){
        return view('vbr.create_vbr');
    }
}
