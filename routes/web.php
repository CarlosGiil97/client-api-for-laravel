<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    $data = Http::get(env('APP_URL_SERVER') . '/clients');
    $response = $data->json();

    if (!empty($response)) {
        foreach ($response as $key => $value) {
            echo $value['name'];
        }
    }
});


*/

Route::get('/', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/cliente', [ClientesController::class, 'create']);
Route::get('/cliente/{cliente}', [ClientesController::class, 'view'])->name('cliente.view');;
Route::post('/cliente', [ClientesController::class, 'store'])->name('cliente.store');
Route::post('/cliente/update', [ClientesController::class, 'update'])->name('cliente.update');
Route::get('/cliente/delete/{id}', [ClientesController::class, 'delete'])->name('cliente.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
