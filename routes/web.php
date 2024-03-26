<?php

use App\Http\Livewire\Index;
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

Route::get('/',Index::class);
Route::get('/article/{id}',\App\Http\Livewire\Article\SingleArticle::class);
Route::get('/register',\App\Http\Livewire\Auth\Register::class)->middleware('guest');
Route::get('/login',\App\Http\Livewire\Auth\Login::class)->middleware('guest');
Route::get('/logout',function ()
{
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/');
}
);
