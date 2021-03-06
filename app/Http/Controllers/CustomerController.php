<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Customer;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function customerList(){
    	Session::put('page','customerList');
    	$customerData = DB::table('customers')
        ->join('admins', 'customers.vbr_id', '=', 'admins.id')
        ->select('customers.*', 'admins.name as admin_name')
        ->get();
        //dd($customerData);
    	return view('customer.customer_list')->with(compact('customerData'));
    }
}
