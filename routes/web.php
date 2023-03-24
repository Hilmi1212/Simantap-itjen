<?php

use App\Models\Tupost;
use App\Models\Apppost;
use App\Models\Auditorpost;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\TupostController;
use App\Http\Controllers\ApppostController;

use App\Http\Controllers\FootersController;
use App\Http\Controllers\AppbpostController;
use App\Http\Controllers\AppcpostController;
use App\Http\Controllers\AuditorpostController;
use App\Http\Controllers\DashboardTupostController;
use App\Http\Controllers\DashboardApppostController;
use App\Http\Controllers\DashboardHtupostController;
use App\Http\Controllers\DashboardAppbpostController;
use App\Http\Controllers\DashboardAppcpostController;
use App\Http\Controllers\DashboardHapppostController;
use App\Http\Controllers\DashboardHappbpostController;
use App\Http\Controllers\DashboardHappcpostController;
use App\Http\Controllers\DashboardAuditorpostController;
use App\Http\Controllers\DashboardHauditorpostController;

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

Route::get('/', [LoginController::class, 'halamanlogin']);






Route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
Route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


Route::post('/simpanregister',[LoginController::class,'simpanregister'])->name('simpanregister');




Route::group(['middleware'=>['auth','ceklevel:admin']], function () {
        route::get('dashboard','App\Http\Controllers\BerandaController@index1')->name('dashboard');

Route::resource('/dashboard/tuposts',DashboardTupostController::class);
Route::resource('/dashboard/appposts',DashboardApppostController::class);
Route::resource('/dashboard/appbposts',DashboardAppbpostController::class);
Route::resource('/dashboard/appcposts',DashboardAppcpostController::class);
Route::resource('/dashboard/auditorposts',DashboardAuditorpostController::class);
Route::resource('/dashboard/register',LoginController::class);
Route::resource('/dashboard/ctuposts', DashboardHtupostController::class);
Route::resource('/dashboard/cappposts', DashboardHapppostController::class);
Route::resource('/dashboard/cappbposts', DashboardHappbpostController::class);
Route::resource('/dashboard/cappcposts', DashboardHappcpostController::class);
Route::resource('/dashboard/cauditorposts', DashboardHauditorpostController::class);
Route::resource('/dashboard/footer',FooterController::class);

});

Route::group(['middleware'=>['auth','ceklevel:admin,usertu,auditor,App1,App2,App3']], function () {
        route::get('beranda','App\Http\Controllers\BerandaController@index')->name('beranda');

});

Route::group(['middleware'=>['auth','ceklevel:usertu']], function () {
    Route::get( 'tupage', [TupostController::class,'index'])->name('tupage');

});

Route::group(['middleware'=>['auth','ceklevel:auditor']], function () {
    Route::get('/auditorpage', [AuditorpostController::class,'index'])->name('auditorpage');

});

Route::group(['middleware'=>['auth','ceklevel:App1']], function () {
    Route::get('/apppage', [ApppostController::class,'index'])->name('apppage');

});

Route::group(['middleware'=>['auth','ceklevel:App2']], function () {
    Route::get('/appbpage', [AppbpostController::class,'index'])->name('appbpage');

});

Route::group(['middleware'=>['auth','ceklevel:App3']], function () {
    Route::get('/appcpage', [AppcpostController::class,'index'])->name('appcpage');

});

