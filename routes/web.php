<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\NavMenuController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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
Route::get('/chat/show', [\App\Http\Controllers\ChatController::class, 'show']);
Route::get('/question/show/{page?}', [QuestionController::class, 'show']);

Route::get('/question/list', [QuestionController::class, 'list']);

Route::get('/question', [QuestionController::class, 'show']);
Route::get('/', [IndexController::class, 'index']);


Route::get('/navMenu/historyQuestion', [NavMenuController::class, 'historyQuestion']);
Route::get('/navMenuDispatch/{router}', [NavMenuController::class, 'dispatch']);


Route::get('/test', [TestController::class, 'index']);



/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/hello', function () {
    return 'Hello World';
});
