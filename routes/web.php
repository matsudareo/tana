<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'PlayersController@nidex');
// Route::get('/drinks', 'MimuController@index');
Route::get('/', [CafeController::class, 'index']);
// Route::get('/index', [CafeController::class, 'index']);


// トップページ表示
// Route::get('/', function () {
//     return view('index');
// });

Route::get("contact.php", [CafeController::class, 'contact_page']);
Route::post("contact.php", [CafeController::class, 'postParam']);

Route::get("confirm.php", [CafeController::class, 'confirm_page']);
Route::post("confirm.php", [CafeController::class, 'postParamInse']);

Route::get("complete.php", [CafeController::class, 'complete_page']);
Route::post("complete.php", [CafeController::class, 'postParamInsert']);

Route::get("delete.php", [CafeController::class, 'delete_page']);

Route::get("edit.php", [CafeController::class, 'edit_page']);
Route::post("edit.php", [CafeController::class, 'edit_postParam']);

Route::get("edit_complete.php", [CafeController::class, 'edit_complete_page']);
Route::post("edit_complete.php", [CafeController::class, 'postParamUpdate']);
// Auth::routes();
Route::get("edit_confirm.php", [CafeController::class, 'edit_confirm_page']);
Route::post("edit_confirm.php", [CafeController::class, 'edit_postParam']);