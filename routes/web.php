<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SweetieController;
use App\Http\Controllers\CostumerController;
use App\Http\Controllers\AdminController;

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
});

Route::get('', [SweetieController::class, 'index']);
Route::get('/index', [SweetieController::class, 'index']);
Route::get('/daftarform', [SweetieController::class, 'daftarform']);
Route::get('/loginform', [SweetieController::class, 'loginform']);
Route::post('/daftar', [SweetieController::class, 'daftar']);
Route::post('/login', [SweetieController::class, 'login']);
Route::get('/logout', [SweetieController::class, 'logout']);

Route::get('/costumer/index', [CostumerController::class, 'index']);
Route::get('/admin/index', [AdminController::class, 'index']);
Route::get('/admin/addform', [AdminController::class, 'addform']);
Route::get('/admin/cake', [AdminController::class, 'cake']);
Route::post('/admin/add', [AdminController::class, 'add']);
Route::get('/admin/laporan', [AdminController::class, 'laporan']);
Route::post('/admin/laporan/edit/', [AdminController::class, 'updatelaporan']);
Route::get('/admin/user', [AdminController::class, 'user']);
Route::get('/admin/profile', [AdminController::class, 'profile']);
Route::post('/admin/profile/update', [AdminController::class, 'updateprofile']);
Route::get('/admin/cake/ubah/{cakecode}', [AdminController::class, 'ubahcakeform']);
Route::post('/admin/cake/ubah', [AdminController::class, 'ubahcake']);
Route::get('/admin/cake/hapus/{id}', [AdminController::class, 'hapus']);
Route::get('/admin/paymentcheckform', [AdminController::class, 'paymentcheck']);
Route::post('/admin/paymentcheck/edit', [AdminController::class, 'updatepaymentcheck']);


Route::get('/costumer/cart', [CostumerController::class, 'cart']);
Route::get('/costumer/cake', [CostumerController::class, 'cake']);
Route::get('/costumer/history', [CostumerController::class, 'history']);
Route::get('/costumer/requestform/{id}', [CostumerController::class, 'requestform']);
Route::get('/costumer/payment/', [CostumerController::class, 'payment']);
Route::post('/costumer/pesan', [CostumerController::class, 'postcart']);
Route::post('/costumer/payment/deal', [CostumerController::class, 'postpayment']);
Route::get('/costumer/payment/history', [CostumerController::class, 'history']);
Route::get('/costumer/cart/delete/{id}', [CostumerController::class, 'cartdelete']);
Route::get('/costumer/profile', [CostumerController::class, 'profile']);
Route::post('/costumer/profile/update', [CostumerController::class, 'updateprofile']);
