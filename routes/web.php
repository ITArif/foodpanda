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
    Route::get('/dashboard','HomeController@index')->name('dashboard');
    route::get('/customer/list','Customercontroller@customerlist')->name('customer.list');
    route::get('/coupon','Couponcontroller@couponlist')->name('coupon.list');
    route::get('/assign/coupon','Couponcontroller@assigncoupon')->name('assign.coupon');
    route::get('/vbr/list','Vbrcontroller@vbrlist')->name('vbr.list');
    //route::post('/vbr/update-status','Vbrcontroller@updateVbrStatus')->name('update.vbrStaus');
    //vbr Delete & Approved & Inapproved
    Route::post('/delete/all/vbrs','Vbrcontroller@deleteAll');
    Route::post('/activate/all/vbrs','Vbrcontroller@activateAll');
    Route::post('/deactivate/all/vbrs','Vbrcontroller@deactivateAll');

    route::get('/create/vbr','Vbrcontroller@createVbr')->name('create.vbr');
    route::post('/add/vbr','Vbrcontroller@addVbr')->name('add.vbr');
    Route::get('/report','ReportController@report')->name('report');
    route::get('/vbr/report','Reportcontroller@vbrreport')->name('vbr.report');
});

///
// Route::get('/vbr/login','VbrAuthController@vbrLoginForm');
// Route::post('/vbr-login','VbrAuthController@vbrLogin')->name('vbr.login');

Route::middleware('vbr')->group(function(){
	Route::get('/vbr/dashboard','HomeController@vbrDashboard')->name('dashbords');
	Route::get('/my/customer','VbrController@myCustomer')->name('mycustomer');
    route::get('/generate/coupon','Vbrcontroller@coupongenerate')->name('coupon.generate');
    route::get('/create/customer','Vbrcontroller@createCustomer')->name('create.customer');
    Route::post('/add/customer','Vbrcontroller@addCustomer')->name('add.customer');
});


