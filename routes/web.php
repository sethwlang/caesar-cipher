<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaesarCipherController;
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
    return view('caesar-cipher');
});

Route::post('/encrypt', [CaesarCipherController::class, 'encrypt']);
Route::post('/decrypt', [CaesarCipherController::class, 'decrypt']);

//https://chat.openai.com/c/5ed015a2-b10c-4602-8cb0-827508dc578d