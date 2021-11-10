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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/auth')->group(function(){
    Route::get('/redirect', 'App\Http\Controllers\Auth\LoginController@redirectToProvider')->name('redirectToProvider');
    Route::get('/callback', 'App\Http\Controllers\Auth\LoginController@handleProviderCallback')->name('handleProviderCallback');
    Route::get('/facebook/redirect', 'App\Http\Controllers\Auth\LoginController@redirectFacebook')->name('redirectFacebook');
    Route::get('/facebook/callback', 'App\Http\Controllers\Auth\LoginController@handleFacebook')->name('handleFacebook');
});

Route::post('/smsgateway', [App\Http\Controllers\SmsGatewayVonage::class, 'smsGateway'])->name('smsGateway');
Route::get('/kirimemail', [App\Http\Controllers\MailController::class, 'index'])->name('kirim-email');
Route::get('/kirimemailreq', [App\Http\Controllers\MailController::class, 'sendReq'])->name('kirim-email-request');
Route::get('/emailblast', [App\Http\Controllers\MailController::class, 'emailBlast'])->name('email-blast');

Route::prefix('/iklan')->group(function(){
    Route::get('/', [App\Http\Controllers\IklanController::class, 'index'])->name('iklan');
    Route::post('/post', [App\Http\Controllers\IklanController::class, 'tambahIklan'])->name('tambah-iklan');
    Route::get('/list', [App\Http\Controllers\IklanController::class, 'listIklan'])->name('list-iklan');
    Route::get('/hapus/{id}', [App\Http\Controllers\IklanController::class, 'hapus'])->name('hapus-iklan');
});


