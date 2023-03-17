<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/SuperAdmin', function(){

return view('SuperAdmin');

})->name('SuperAdmin')->middleware('SuperAdmin');
Route::get('/Admin', function(){

    return view('Admin');
    
    })->name('Admin')->middleware('Admin');;
    Route::get('/department_head', function(){

        return view('department_head');
        
        })->name('department_head')->middleware('department_head');
        Route::get('/staff', function(){

            return view('staff');
            
            })->name('staff')->middleware('staff');;;
            Route::get('/client', function(){

                return view('client');
                
                })->name('client')->middleware('client');;;