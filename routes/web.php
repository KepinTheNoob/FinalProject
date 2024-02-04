<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register-leader', function () {
    return view('RegisterLeader1');
});
Route::get('/register-leader2', function () {
    return view('RegisterLeader2');
});
Route::get('/register-group', function () {
    return view('RegisterGroup');
});
Route::get('/user-dashboard', [App\Http\Controllers\dashboard::class, 'DashboardUser']);

Route::post('/register-leader1', [App\Http\Controllers\LeaderController::class, 'CreateNewLeader']);
Route::post('/register-leader2', [App\Http\Controllers\LeaderController::class, 'CreateNewLeader2']);