<?php

use Illuminate\Support\Facades\Route;
use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule;
use App\Http\Livewire\UserDashboardLivewire;
use App\Http\Livewire\UserPaymentLivewire;
use App\Http\Livewire\BillsLivewire;
use App\Http\Livewire\BillsAddLivewire;
use App\Http\Livewire\BillsEditLivewire;
use App\Http\Livewire\AllowanceLivewire;



use App\Http\Livewire\AdminUserLivewire;
use App\Http\Livewire\AdminUserEditLivewire;
use App\Http\Livewire\AdminUserAddLivewire;
use App\Http\Livewire\AdminRankLivewire;
use App\Http\Livewire\AdminRankEditLivewire;
use App\Http\Livewire\AdminRankAddLivewire;
use App\Http\Livewire\AdminGradesLivewire;
use App\Http\Livewire\AdminBillsLivewire;
use App\Http\Livewire\AdminBillsEditLivewire;

use App\Http\Livewire\AdminAllowanceLivewire;
use App\Http\Livewire\AdminAllowanceAddLivewire;
use App\Http\Livewire\AdminAllowanceEditLivewire;
use App\Http\Livewire\IssuedSalaryLivewire;






Route::get('/dashboard',UserDashboardLivewire::class);
Route::get('/payments',UserPaymentLivewire::class);
Route::get('/bill',UserBillLivewire::class);
Route::get('/bill_add',BillAddLivewire::class);
Route::get('/bill_edit',BillsEditLivewire::class);
Route::get('/allowance',AllowanceLivewire::class);


Route::get('/adminuser',AdminUserLivewire::class);
Route::get('/adminuseredit',AdminUserEditLivewire::class);
Route::get('/adminuseradd',AdminUserAddLivewire::class);
Route::get('/adminrank',AdminRAnkLivewire::class);
Route::get('/adminrankedit',AdminRankEditLivewire::class);
Route::get('/adminrankadd',AdminRankAddLivewire::class);


Route::get('/admingrades',AdminGradeLivewire::class);
Route::get('/adminbill',AdminBillLivewire::class);
Route::get('/adminbilledit',AdminBillEditditLivewire::class);
Route::get('/adminallowance',AdminAllowanceLivewire::class);
Route::get('/adminallowanceadd',AdminAllowanceAddLivewire::class);
Route::get('/adminallowanceedit',AdminAllowanceEditLivewire::class);
Route::get('/adminissuedsalary',AdminIssuedSalaryLivewire::class);








Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// user
