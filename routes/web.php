<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Task_Desc');
});

Route::get('/{campaignId}/{workerId}', function () {
    return view('Task_Desc');
});

Route::get('/home', function () {
    return view('Task_Desc');
});

Route::get('/task1', function () {
    return view('mainTask1');
})->name('task1');



Route::post('task1_submit', [\App\Http\Controllers\TaskController::class, 'store_mainTask1'])->name('SubmitMainTask1');


Route::get('/mainTask2.blade.php', function () {
    return view('mainTask2');
})->name('task2');

Route::get('/mainTask3.blade.php', function () {
    return view('mainTask3');
})->name('task3');

Route::get('/mainTask4.blade.php', function () {
    return view('mainTask4');
})->name('task4');

Route::get('/survey.blade.php', function () {
    return view('survey');
})->name('survey');
Route::post('task2_submit', [\App\Http\Controllers\TaskController::class, 'store_mainTask2'])->name('SubmitMainTask2');

Route::get('/task3', function () {
    return view('mainTask3');
})->name('task3');

Route::post('task3_submit', [\App\Http\Controllers\TaskController::class, 'store_mainTask3'])->name('SubmitMainTask3');


Route::get('/task4', function () {
    return view('mainTask4');
})->name('task4');

Route::post('task4_submit', [\App\Http\Controllers\TaskController::class, 'store_mainTask4'])->name('SubmitMainTask4');

Route::get('/survey', function () {
    return view('survey');
})->name('survey');

Route::post('rating_submit', [\App\Http\Controllers\RatingController::class, 'store_review'])->name('RatingSubmit');


Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::get('/task', [\App\Http\Controllers\TaskController::class, 'task'])->name('task');
