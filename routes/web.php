<?php

use Illuminate\Support\Facades\Route;

//Auth::routes();
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard','HomeController@index');
Route::get('/admin/login','AdminAuthController@showLoginForm');
Route::post('/admin/login','AdminAuthController@login')->name('admin.login');
Route::post('/admin/logout','AdminAuthController@logout')->name('admin.logout');
Route::get('/customer/list','CustomerController@customerList')->name('customer.list');
Route::get('/coupon','CouponController@couponList')->name('coupon.list');
Route::get('/assign/coupon','CouponController@assignCoupon')->name('assign.coupon');
Route::get('/vbr/list','VbrController@vbrList')->name('vbr.list');
Route::get('/report','ReportController@report')->name('report');
Route::get('/vbr/report','ReportController@vbrReport')->name('vbr.report');
///vbr part (vbr)
Route::get('/my/customer','VbrController@myCustomer')->name('mycustomer');
Route::get('/generate/coupon','VbrController@couponGenerate')->name('coupon.generate');
Route::get('/create/customer','VbrController@createCustomer')->name('create.customer');