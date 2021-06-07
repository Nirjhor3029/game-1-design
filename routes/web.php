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
    return view('welcome');
    // return view('overview');
});
Route::get('/overview', function () {
    return view('overview');
})->name('overview');
Route::get('/recruitment', function () {
    return view('recruitment');
})->name('recruitment');
Route::get('/budgeting', function () {
    return view('budgeting');
})->name('budgeting');
Route::get('/revenue', function () {
    return view('revenue');
})->name('revenue');
Route::get('/decision-driven', function () {
    return view('decision_driven');
})->name('decision-driven');
Route::get('/financial-statement', function () {
    return view('financial_statement');
})->name('financial-statement');
