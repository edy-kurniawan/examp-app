<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\ExamController;
use App\Http\Controllers\Teacher\QuestionController;

Route::get('/', function () {
    return redirect('/teacher/exam');
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
    Route::resource('exam', ExamController::class);
    Route::resource('question', QuestionController::class);
    Route::post('upload-image', [QuestionController::class, 'uploadImage'])->name('upload-image');
});
