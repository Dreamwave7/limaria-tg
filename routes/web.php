<?php

use App\Http\Controllers\ClinicController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\WebHookController;
use Illuminate\Support\Facades\Route;

Route::post('/telegram-webhook', [WebHookController::class,"webhook"])->name("telegram.webhook");

Route::get("/set-webhook",[WebHookController::class,"setWebhook"])->name("set.webhook");


Route::get("/",[ClinicController::class,"index"])->middleware("auth");

Route::resource("clinic",ClinicController::class)->middleware("auth");

Route::resource("employee", EmployeeController::class)->middleware("auth");

Route::resource("request", RequestController::class)->middleware("auth");

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


\Illuminate\Support\Facades\Auth::routes();
