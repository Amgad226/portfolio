<?php

use App\Http\Controllers\AuthController;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    if(!session()->has('authenticated')){
        // Visitor::create(['ip_address'=>$request->ip(),"user_agent"=>$request->userAgent()]);
    }
    return view('app');
});

Route::get('/login_page_to_access_admin_permissions', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login'])->name("login_action");
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get("/dashboard_page_to_access_admin_permissions", function(){
    $visitors= Visitor::orderBy("id","desc")->get();
    $group = Visitor::select("ip_address", DB::raw('count(*) as total'))->orderBy("id","desc")->groupBy("ip_address")->get();
    
    return view('dashboard',compact('visitors',"group"));

})->middleware('auth.user')->name("dashboard");;
