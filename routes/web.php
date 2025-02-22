<?php

use App\Http\Controllers\AuthController;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {

    Visitor::create(['ip_address'=>$request->ip(),"user_agent"=>$request->userAgent()]);
    return view('app');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get("/dashboard", function(){
    $visitors= Visitor::orderBy("id","desc")->get();
    
    return view('dashboard',compact('visitors'));

})->middleware('auth.user')->name("dashboard");;
