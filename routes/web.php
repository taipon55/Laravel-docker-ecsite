<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\LineItemController;

Route::controller(ProductController::class)->group(function(){
    Route::name('product.')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/{id}','show')->name('show');
    });
});

Route::controller(LineItemController::class)->group(function() { 
    Route::name('line_item.')->group(function () {
        Route::post('/line_item/create', 'create')->name('create');
    });
});