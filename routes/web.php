<?php

use Illuminate\Support\Facades\Route;
use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule;
           //  admin
use App\Http\Livewire\AdminAllowanceAddLivewire;
use App\Http\Livewire\AdminAllowanceLivewire;
use App\Http\Livewire\AdminBillEditLivewire;
use App\Http\Livewire\AdminGradeLivewire;
use App\Http\Livewire\AdminRankAddLivewire;
use App\Http\Livewire\AdminRankEditLivewire;
use App\Http\Livewire\AdminRankLivewire;
use App\Http\Livewire\AdminUserLivewire;
use App\Http\Livewire\AdminUserEditLivewire;
use App\Http\Livewire\AdminUserAddLivewire;
//    user
use App\Http\Livewire\UserDashboardLivewire;
use App\Http\Livewire\UserPaymentLivewire;
use App\Http\Livewire\UserBillLivewire;
use App\Http\Livewire\UserAllowance;
use App\Http\Livewire\UserBillAddLivewire;
use App\Http\Livewire\UserBillEditLivewire;
    //    user
Route::get('/dashboard',UserDashboardLivewire::class);
Route::get('/payments',UserPaymentLivewire::class);
Route::get('/bill',UserBillLivewire::class);
Route::get('bill/add',UserBillAddLivewire::class);
Route::get('bil/edit',UserBillEditLivewire::class);
Route::get('allowance/',UserAllowance::class);
//    admin
Route::get('user/',AdminUserLivewire::class);
Route::get('user/edit',AdminUserEditLivewire::class);
Route::get('user/add',AdminUserAddLivewire::class);
Route::get('rank',AdminRankLivewire::class);
Route::get('rank/edit',AdminRankEditLivewire::class);
Route::get('rank/add',AdminRankAddLivewire::class);
Route::get('grade',AdminGradeLivewire::class);
Route::get('admin/bill',AdminBillLivewire::class);
Route::get('admin/bill/edit',AdminBillEditLivewire::class);
Route::get('admin/allowance',AdminAllowanceLivewire::class);
Route::get('allowance/add',AdminAllowanceAddLivewire::class);




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

//user
