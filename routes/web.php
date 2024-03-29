<?php
use App\Http\Controllers\SlotController;
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
  if(Auth::guest()){
    return view('auth.login');
  }
  else{
    return redirect('/slots');
  }
});

Auth::routes();


Route::resource('/slots', 'SlotController')->middleware('auth');
