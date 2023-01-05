<?php

use Cento\Contact\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Cento\ontact\Http\Controllers'],function(){
    
    Route::get('contact',[ContactController::class, 'index'])->name('contcat');

    ROute::post('contact', [ContactController::class, 'send']);
});

