<?php

use App\Http\Controllers\ProductController;


Route::controller(ProductController::class)->group(function(){
    Route::name('product.')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/{id}','show')->name('show');
    });
});