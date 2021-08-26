<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/', \App\Http\Livewire\Home::class)->name('home');
Route::get('/about', \App\Http\Livewire\About::class)->name('about');
Route::get('/yef', \App\Http\Livewire\Yef::class)->name('yef');
Route::get('/contact', \App\Http\Livewire\Contact::class)->name('contact');
Route::get('/services', \App\Http\Livewire\Services::class)->name('services');

Route::get('/yef-section', function () {
    return view('welcome');
})->name('yef-section');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/taketest', function () {

    $active_quiz = \App\Models\Quiz::where('user_id',Auth::user()->id)->where('status','Active')->count();

    if($active_quiz==0){
        \App\Models\Quiz::create([
            'user_id'=>\Illuminate\Support\Facades\Auth::user()->id,
            'mark'=>0,
            'status'=>'Active'
        ]);
    }
    return view('quiz.test');
})->name('taketest');


Route::middleware(['auth:sanctum', 'verified'])->get('/mytest', function () {

    $marks = \App\Models\Quiz::where('user_id', Auth::user()->id)->get();
    return view('quiz.single' , ['marks'=>$marks]);
})->name('mytest');
Route::middleware(['auth:sanctum', 'verified'])->get('/alltests', function () {

    $marks = \App\Models\Quiz::get();
    return view('quiz.allresults' , ['marks'=>$marks]);
})->name('alltests');
