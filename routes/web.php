<?php

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {

    Visitor::create(['ip_address'=>$request->ip(),"user_agent"=>$request->userAgent()]);
    return view('app');
});
