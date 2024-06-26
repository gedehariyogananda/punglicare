<?php

use App\Http\Controllers\Api\Auth\ServiceTwilloController;
use App\Http\Controllers\Api\ForgotPasswordController;
use App\Http\Controllers\Api\HomePageController;
use App\Http\Controllers\Api\LaporanController;
use App\Http\Controllers\Api\UserController;
use App\Mail\ForgotPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware(['auth:sanctum'])->group(function() {
    Route::controller(UserController::class)->group(function() {
        Route::get('laporan-dukungan', 'getLaporanDukungan');
        Route::put('change-password','changePassword');
        Route::put('edit-user','editUser');
    });

    Route::controller(ForgotPasswordController::class)->group(function(){
        Route::post('forgot-password/send-otp', 'sendOtp');
        Route::post('forgot-password/verify-otp','verifyOtp');
    });


Route::controller(ServiceTwilloController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('verifikasi/otp/sms', 'verifikasiOtpSms');
    Route::post('resend/otp/sms', 'resendOtpSms');
    Route::post('logout', 'logout');
});

Route::controller(HomePageController::class)->group(function () {
    Route::get('/name/user', 'name');
    Route::get('/detail/user', 'detailUser');
    Route::get('/laporan/terdekat/{latitude}/{longitude}', 'laporanTerdekat');
    Route::get('/notif/user', 'notifUser');
    Route::post('/patch/notif/{id}', 'notifUserPatch');
});

Route::controller(LaporanController::class)->group(function () {
    Route::get('/laporan/{id}', 'getLaporan');
    Route::post('/laporan/{id}/report', 'laporanReport');
    Route::post('/laporan/beri-dukungan/{id}/{lat}/{long}', 'beriDukungan');

    // api comment init
    Route::post('/laporan/comment/{id}', 'commentLaporan');
    Route::post('/laporan/comment/{id}/delete', 'deleteCommentLaporan');
    Route::post('/laporan/comment/{id}/update', 'updateCommentLaporan');

    // laporan umum
    Route::get('/laporan/laporan-umum/{lat}/{long}/{status}', 'laporanUmum');

    // laporan anda
    Route::get('/laporan/laporan-anda/{status}', 'laporanAnda');

    // get all laporan didunia ini 
    Route::get('/laporan/diseluruh/dunia', 'allLaporan');

    // buat laporan 
    Route::post('/laporan/buat-laporan/{lat}/{long}', 'buatLaporan');

    // service convert alamat from lat long 
    Route::get('/laporan/convert-alamat/{lat}/{long}', 'convertAlamat');
});
