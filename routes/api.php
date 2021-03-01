<?php

use App\Models\Usuario;
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

Route::prefix('v1')->group(function(){
    Route::get('lista', function() {
        return Usuario::listar(10);
    });
    Route::post('cadastrar',"API\Usuario@salvar");
});
