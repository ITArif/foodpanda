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

Route::get('/','AdminAuthController@showLoginForm');
route::any('/admin/logout','adminauthcontroller@logout')->name('admin.logout');
route::post('/admin/login','adminauthcontroller@login')->name('admin.login');

Route::middleware('admin')->group(function(){
    Route::get('/dashboard','HomeController@index');
    route::get('/customer/list','customercontroller@customerlist')->name('customer.list');
    route::get('/coupon','couponcontroller@couponlist')->name('coupon.list');
    route::get('/assign/coupon','couponcontroller@assigncoupon')->name('assign.coupon');
    route::get('/vbr/list','vbrcontroller@vbrlist')->name('vbr.list');
    route::get('/create/vbr','vbrcontroller@createVbr')->name('create.vbr');
    Route::get('/report','ReportController@report')->name('report');
    route::get('/vbr/report','reportcontroller@vbrreport')->name('vbr.report');
});

///
Route::get('/vbr/login','VbrAuthController@vbrLoginForm');
Route::post('/vbr-login','VbrAuthController@vbrLogin')->name('vbr.login');

Route::middleware('vbr')->group(function(){
	Route::get('/vbr/dashboard','HomeController@vbrDashboard');
	Route::get('/my/customer','VbrController@myCustomer')->name('mycustomer');
    route::get('/generate/coupon','vbrcontroller@coupongenerate')->name('coupon.generate');
    route::get('/create/customer','vbrcontroller@createcustomer')->name('create.customer');
});


