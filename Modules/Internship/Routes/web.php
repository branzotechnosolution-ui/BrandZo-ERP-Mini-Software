<?php

use Illuminate\Support\Facades\Route;
use Modules\Internship\Http\Controllers\InternController;

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::post('interns/data', [InternController::class, 'data'])->name('interns.data');
    Route::resource('interns', InternController::class);
});
