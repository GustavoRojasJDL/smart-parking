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

Route::resource('/slots','SlotController');

/* Route::get('/slots',function(){
    $datos = Slot::all();
    $arr = [];
    foreach ($datos as $dato) {
        $arr2 = [
            'id' => $dato->id,
            'Status' => $dato->Status,
            'created_at' => $dato->created_at,
            'updated_at' => $dato->updated_at,
            'slot_url' => request()->url()."/$dato->id/"
        ];
        $arr[$dato->name] = $arr2;
    }
    return $arr;
}); */