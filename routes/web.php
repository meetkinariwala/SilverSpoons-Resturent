<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CuisinController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\orderdisplay;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TablebookingController;
use App\Http\Controllers\TableController;
use App\Models\Menu;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/login',[BannerController::class,'login']);


Route::get('/admin', function () {
    return view('adminhome');
});


Route::get('/', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/alogin', function () {
    return view('adminlogin');
});

Route::get('/asignup', function () {
    return view('adminsignup');
});
Route::get('/alogin', function () {
    return view('adminlogin');
});

Route::resource('cuisins',CuisinController::class);
Route::resource('menu',MenuController::class);
Route::resource('table',TableController::class);
Route::resource('banners',BannerController::class);
Route::resource('coupons',CouponController::class);
Route::resource('staff',StaffController::class);
Route::resource('order', orderdisplay::class);


Route::get('/api/get/getbanner',[BannerController::class,'getBannerDataApi']);

Route::get('/api/get/getcuisin',[CuisinController::class,'GetCuisinApi']);

Route::get('/api/get/GetMenuApi',[MenuController::class,'GetMenuApi']);

Route::get('/api/get/GetCouponApi',[CouponController::class,'GetCouponApi']);


Route::get('/api/get/getOrdersApi',[OrdersController::class,'getOrdersApi']);


Route::get('/api/gettables',[TablebookingController::class,'gettables']);

Route::post('/api/getCountOfCart',[OrdersController::class,'getCountOfCart']);




Route::post('/register_user',[PersonController::class,'register_user']);
Route::post('/login_api',[PersonController::class,'login_api']);
Route::post('/api/editProfile',[PersonController::class,'editProfile']);

Route::post('/api/get/Menu/cat',[MenuController::class,'GetMenuApiCat']);


Route::post('/api/addOrders',[OrdersController::class,'addOrders']);
Route::post('/api/getOrders',[OrdersController::class,'getOrders']);
Route::post('/api/removeOrder',[OrdersController::class,'removeOrder']);
Route::post('/api/update/qty',[OrdersController::class,'updateQty']);
Route::post('/api/makePayment',[OrdersController::class,'makePayment']);
Route::post('/api/addtablebooking',[TablebookingController::class,'addtablebooking']);
Route::post('/api/getCouponFromCode',[CouponController::class,'getCouponFromCode']);

Route::post('/order/history',[OrdersController::class,'getOrdersCompleted']);

Route::get('/order/update/{id}',[OrdersController::class,'updateOrder']);

Route::get('/admin',[OrdersController::class,'index']);