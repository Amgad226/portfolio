<?php

use App\Http\Controllers\AuthController;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
/** TODO
 * nust move the code to controller 
 * must craete error handling 
 * 
 * 
 */
Route::middleware('throttle:30,1')->get('/', function (Request $request) {
    try{
        if(!session()->has('authenticated')){
            Visitor::create(['ip_address'=>$request->ip(),"user_agent"=>$request->userAgent(),"session_id"=>session()->id()]);
        }
    }catch(Error $e){
        Log::channel('error_web')->alert($e->getMessage());

    }finally{
        return view('app');
    }
})->name("app");

Route::get('/login_page_to_access_admin_permissions', [AuthController::class, 'showLoginForm'])->name('login');

Route::middleware('throttle:10,1')->post('/login', [AuthController::class, 'login'])->name("login_action");
Route::middleware("auth.user")->get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('throttle:10,1')->get("/dashboard_page_to_access_admin_permissions", function(){
    $visitors= Visitor::orderBy("id","desc")->get();
    $group = Visitor::select("ip_address","user_agent", DB::raw('count(*) as total'))->orderBy("id","desc")->groupBy("ip_address")->get();
    $sessions = DB::table("sessions")->select("id","ip_address","user_agent","last_activity")->get()->toArray();
    
    return view('dashboard',compact('visitors',"group","sessions"));

})->middleware('auth.user')->name("dashboard");;
