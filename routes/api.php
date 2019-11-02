<?php

use App\Slot;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/slots','SlotController')->middleware('auth:api');
Route::middleware('auth:api')->get('/slots',function(){
    $datos = Slot::all();
    $arr = [];
    foreach ($datos as $dato) {
        $arr2 = [
            'title' => $dato->name,
            'created_at' => $dato->created_at,
            'content' => $dato->content,
            'user_url' => request()->url()."/$dato->user_id/"
        ];
        $arr[$dato->id] = $arr2;
    }
    return $arr;
});