<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\ExampController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group([
    'prefix' => 'teacher',
    'as' => 'teacher.'
], function () {
    Route::resource('examp', ExampController::class);
});
