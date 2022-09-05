<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');

Route::group(['middleware' => ['auth']], function() {

    Route::get('/stations', [App\Http\Controllers\StationController::class, 'index'])->name('stations');
    Route::get('/stations/create', [App\Http\Controllers\StationController::class, 'create'])->name('stations.create');
    Route::post('/stations/store', [App\Http\Controllers\StationController::class, 'store'])->name('stations.store');
    Route::get('stations/edit/{id}', [App\Http\Controllers\StationController::class, 'edit'])->name('stations.edit');
    Route::post('/stations/update/{id}', [App\Http\Controllers\StationController::class, 'update'])->name('stations.update');
    Route::get('stations/delete/{id}', [App\Http\Controllers\StationController::class, 'delete'])->name('stations.delete');
    Route::get('stations/change_status', [App\Http\Controllers\StationController::class, 'status'])->name('stations.status');


    Route::get('/sensors', [App\Http\Controllers\SensorController::class, 'index'])->name('sensors');
    Route::get('/create', [App\Http\Controllers\SensorController::class, 'create'])->name('sensors.create');
    Route::post('/store', [App\Http\Controllers\SensorController::class, 'store'])->name('sensors.store');
    Route::get('/edit/{id}', [App\Http\Controllers\SensorController::class, 'edit'])->name('sensors.edit');
    Route::post('/update/{id}', [App\Http\Controllers\SensorController::class, 'update'])->name('sensors.update');
    Route::get('/delete/{id}', [App\Http\Controllers\SensorController::class, 'delete'])->name('sensors.delete');
    Route::get('change_status', [App\Http\Controllers\SensorController::class, 'status'])->name('sensors.status');


    Route::get('/assign_sensor', [App\Http\Controllers\SensorController::class, 'assign_sensor'])->name('assign_sensor');
    Route::get('/assign_sensor/create', [App\Http\Controllers\SensorController::class, 'assign_sensor_create'])->name('assign_sensor_create');
    Route::post('/assign_sensor/store', [App\Http\Controllers\SensorController::class, 'assign_sensor_store'])->name('assign_sensor_store');
    Route::get('/assign_sensor/delete/{id}', [App\Http\Controllers\SensorController::class, 'assign_sensor_delete'])->name('assign_sensor_delete');

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});
