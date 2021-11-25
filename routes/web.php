<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showAds'])->name('ads');

Route::get('/back-end', function () {
    return view('back-end.iklan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::prefix('/auth')->group(function(){
    Route::get('/redirect', 'App\Http\Controllers\Auth\LoginController@redirectToProvider')->name('redirectToProvider');
    Route::get('/callback', 'App\Http\Controllers\Auth\LoginController@handleProviderCallback')->name('handleProviderCallback');
    Route::get('/facebook/redirect', 'App\Http\Controllers\Auth\LoginController@redirectFacebook')->name('redirectFacebook');
    Route::get('/facebook/callback', 'App\Http\Controllers\Auth\LoginController@handleFacebook')->name('handleFacebook');
});

Route::post('/smsgateway', [App\Http\Controllers\SmsGatewayVonage::class, 'smsGateway'])->name('smsGateway')->middleware('auth');
Route::get('/kirimemail', [App\Http\Controllers\MailController::class, 'index'])->name('kirim-email')->middleware('auth');
Route::post('/kirimemailreq', [App\Http\Controllers\MailController::class, 'sendReq'])->name('kirim-email-request')->middleware('auth');
Route::get('/emailblast', [App\Http\Controllers\MailController::class, 'emailBlast'])->name('email-blast')->middleware('auth');
Route::get('/ads', [App\Http\Controllers\IklanController::class, 'showAds'])->name('ads');

Route::prefix('/iklan')->group(function(){
});

Route::prefix('/users')->group(function(){
    Route::get('/', [App\Http\Controllers\UserManagement::class, 'index'])->name('users')->middleware('auth');
});
Route::get('/back-office/loginForm', [App\Http\Controllers\BackOffice::class, 'login'])->name('login-back-office');
Route::prefix('/back-office')->group(function(){
    Route::post('/loginPost', [App\Http\Controllers\BackOffice::class, 'loginBack'])->name('login-post');
    Route::get('/dashboard', [App\Http\Controllers\BackOffice::class, 'index'])->name('dashboard');
    Route::get('/marketing-campaign', [App\Http\Controllers\BackOffice::class, 'email'])->name('marketing-campaign');
    Route::post('/iklan/edit/{id}', [App\Http\Controllers\IklanController::class, 'iklanUpdate'])->name('edit-iklan');
    Route::post('/kirimemailreq', [App\Http\Controllers\MailController::class, 'sendReq'])->name('kirim-email-request');
    Route::get('/iklan', [App\Http\Controllers\IklanController::class, 'index'])->name('iklan');
    Route::post('/iklan/post', [App\Http\Controllers\IklanController::class, 'tambahIklan'])->name('tambah-iklan');
    Route::get('/iklan/list', [App\Http\Controllers\IklanController::class, 'listIklan'])->name('list-iklan');
    Route::get('/iklan/hapus/{id}', [App\Http\Controllers\IklanController::class, 'hapus'])->name('hapus-iklan');
    Route::post('/logout', [App\Http\Controllers\BackOffice::class, 'logoutBack'])->name('logout-back');
    Route::post('/iklan/gambar/post', [App\Http\Controllers\IklanController::class, 'tambahBannerIklan'])->name('post-banner-iklan');
    Route::post('/iklan/banner/edit/{id}', [App\Http\Controllers\IklanController::class, 'banneriklanUpdate'])->name('edit-banner-iklan');
    Route::get('/iklan/banner/hapus/{id}', [App\Http\Controllers\IklanController::class, 'hapusBannerIklan'])->name('hapus-banner-iklan');
    Route::get('/user-management', [App\Http\Controllers\BackOffice::class, 'userManagement'])->name('user-management');
});