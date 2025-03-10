<?php

use App\Http\Controllers\ClinicController;
use App\Http\Controllers\WebHookController;
use Illuminate\Support\Facades\Route;

Route::post('/telegram-webhook', [WebHookController::class,"webhook"])->name("telegram.webhook");

Route::get("/set-webhook",[WebHookController::class,"setWebhook"])->name("set.webhook");


Route::resource("clinic",ClinicController::class);
