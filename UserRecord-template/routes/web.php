<?php

use App\Http\Controllers\Users;
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
    return view('login');
});
Route::get('user-list', [Users::class, 'list']);
Route::get('create', [Users::class, 'create']);
Route::post('loginsubmit', [Users::class, 'loginsubmit']);
Route::post('createsubmit', [Users::class, 'createsubmit']);
