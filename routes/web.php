<?php

use App\Http\Controllers\activity\ActivityJoinService;
use App\Http\Controllers\activity\ProfileService;
use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Auth;
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
    if (Auth::check()) {
        return view('dashboard2');
    }
    return view('dashboard');
});
//eray ekledi


//eray dashboard'ı views içerisindeki dashboard uyguladı.
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('tercihler', [CustomAuthController::class, 'tercihler']);


Route::get('signin', [CustomAuthController::class, 'giris'])->name('giris');
//eray oluşturdu
Route::get('meets', [CustomAuthController::class, 'meets'])->name('meets');


Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::post("sign-in", [CustomAuthController::class, "signIn"])->name("signIn");


// Path: app/Http/Controllers/activity/ActivityCreatorService.php
Route::post('activity-create', [\App\Http\Controllers\activity\ActivityCreatorService::class, 'activityCreate'])->name('activityCreate');
Route::get('etkinlik-olustur', [\App\Http\Controllers\activity\ActivityCreatorService::class, 'viewActivity'])->name('activityCreate');


Route::get('/signup', function () {
    return view('auth.signup');
});



Route::post('/harita', function () {
    return view('harita');
});

Route::get('etkinlikler', [\App\Http\Controllers\activity\ActivityListService::class, 'viewAllActivities'])->name('activityList');

// /detail/{id}
Route::get('detail/{id}', [\App\Http\Controllers\activity\ActivityListService::class, 'viewActivityDetail'])->name('activityDetail');

Route::get('hatalı-giriş', function () {
    return view('error');
});


Route::get('etkinlige-katıl/{id}', [ActivityJoinService::class, 'joinActivity'])->name('joinActivity');
Route::get('profile', [ProfileService::class, 'viewProfile'])->name('profil');
