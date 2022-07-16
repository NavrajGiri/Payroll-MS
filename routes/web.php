<?php
    //  admin
use App\Http\Livewire\AdminAllowanceAddLivewire;
use App\Http\Livewire\AdminAllowanceLivewire;
use App\Http\Livewire\AdminBillEditLivewire;
use App\Http\Livewire\AdminBillLivewire;

use App\Http\Livewire\AdminGradeLivewire;
use App\Http\Livewire\AdminRankAddLivewire;
use App\Http\Livewire\AdminRankEditLivewire;
use App\Http\Livewire\AdminRankLivewire;
use App\Http\Livewire\AdminUserLivewire;
use App\Http\Livewire\AdminUserEditLivewire;
use App\Http\Livewire\AdminUserAddLivewire;

use Illuminate\Support\Facades\Route;
use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule;
use App\Http\Livewire\UserDashboardLivewire;
use App\Http\Livewire\UserPaymentLivewire;
use App\Http\Livewire\UserBillLivewire;
use App\Http\Livewire\UserAllowance;
use App\Http\Livewire\UserBillAddLivewire;
use App\Http\Livewire\UserBillEditLivewire;


    //    user

// Route::get('/dashboard',UserDashboardLivewire::class);
Route::get('/payments',UserPaymentLivewire::class)->name('user.payment');
Route::get('/bill',UserBillLivewire::class)->name('user.bill');
Route::get('/bill/add',UserBillAddLivewire::class)->name('user.bill.add');
Route::get('/bill/edit/{bill_id}',UserBillEditLivewire::class)->name('user.bill.edit');
Route::get('/allowance/',UserAllowance::class)->name('user.allowance');

//    admin
Route::get('admin/user/',AdminUserLivewire::class)->name('admin.user');
Route::get('admin/user/edit',AdminUserEditLivewire::class);
Route::get('admin/user/add',AdminUserAddLivewire::class);
Route::get('admin/rank',AdminRankLivewire::class)->name('admin.rank');
Route::get('admin/rank/edit',AdminRankEditLivewire::class);
Route::get('admin/rank/add',AdminRankAddLivewire::class);
Route::get('admin/grade',AdminGradeLivewire::class)->name('admin.grade');
Route::get('admin/bill',AdminBillLivewire::class)->name('admin.bill');
Route::get('admin/bill/edit',AdminBillEditLivewire::class);
Route::get('admin/allowance',AdminAllowanceLivewire::class)->name('admin.allowance');
Route::get('admin/allowance/add',AdminAllowanceAddLivewire::class);




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
