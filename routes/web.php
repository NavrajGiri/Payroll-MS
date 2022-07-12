<?php
use App\Http\Controller\AllownaceController;
use App\Http\Controller\salary_detailsController;
use App\Http\Controller\BillController;
use App\Http\Controller\LoginController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

    //   employee

Route::get('/insert',[EmployeeController::class,"insert"]);
Route::get('/update',[EmployeeController::class,"update"]);
Route::get('/delete',[EmployeeController::class,"view"]);
Route::get('/view',[EmployeeController::class,"view"]);


//    login

Route::get('/insert1',[LoginController::class,"insert1"]);
Route::get('/update1',[LoginController::class,"update1"]);
Route::get('/delete1',[LoginController::class,"delete1"]);
Route::get('/view1',[LoginController::class,"view1"]);


// bill

Route::get('/insert2',[BillController::class,"insert2"]);
Route::get('/update2',[BillController::class,"update2"]);
Route::get('/delete2',[BillController::class,"delete2"]);
Route::get('/view2',[BillController::class,"view2"]);


//  salary details

Route::get('/insert3',[salary_detailsController::class,"insert3"]);
Route::get('/update3',[salary_detailsController::class,"update3"]);
Route::get('/delete3',[salary_detailsController::class,"delete3"]);
Route::get('/view3',[salary_detailsController::class,"view3"]);

// allowance

Route::get('/insert4',[AllownaceController::class,"insert4"]);
Route::get('/update4',[AllownaceController::class,"update4"]);
Route::get('/delete4',[AllownaceController::class,"delete4"]);
Route::get('/view4',[AllownaceController::class,"view4"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
