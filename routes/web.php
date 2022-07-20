<?php


           //  admin
 use App\Http\Livewire\AdminAllowanceEditLivewire;
use App\Http\Livewire\AdminIssuedSalaryLivewire;
use App\Http\Livewire\AdminAllowanceAddLivewire;
use App\Http\Livewire\AdminAllowanceLivewire;
use App\Http\Livewire\AdminBillEditLivewire;
use App\Http\Livewire\AdminBillLivewire;
use App\Http\Livewire\AdminGradeLivewire;
use App\Http\Livewire\AdminGradeEditLivewire;
use App\Http\Livewire\AdminGradeAddLivewire;
use App\Http\Livewire\AdminRankAddLivewire;
use App\Http\Livewire\AdminRankEditLivewire;
use App\Http\Livewire\AdminRankLivewire;
use App\Http\Livewire\AdminUserLivewire;
use App\Http\Livewire\AdminUserEditLivewire;
use App\Http\Livewire\AdminUserAddLivewire;

use Illuminate\Support\Facades\Route;
use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule;

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
Route::get('bill/edit',UserBillEditLivewire::class);
Route::get('allowance/',UserAllowance::class);


    //    user

Route::get('/dashboard',UserDashboardLivewire::class);
Route::get('/payments',UserPaymentLivewire::class)->name('user.payment');
Route::get('/bill',UserBillLivewire::class)->name('user.bill');
Route::get('/bill/add',UserBillAddLivewire::class)->name('user.bill.add');
Route::get('/bill/edit/{bill_id}',UserBillEditLivewire::class)->name('user.bill.edit');
Route::get('/allowance',UserAllowance::class)->name('user.allowance');

//    admin
Route::get('admin/user/',AdminUserLivewire::class)->name('admin.user');
Route::get('admin/user/edit/{user_id}',AdminUserEditLivewire::class)->name('admin.user.edit');
Route::get('admin/user/add',AdminUserAddLivewire::class)->name('admin.user.add');
Route::get('admin/rank',AdminRankLivewire::class)->name('admin.rank');
Route::get('admin/rank/edit/{rank_id}',AdminRankEditLivewire::class)->name('admin.rank.edit');
Route::get('admin/rank/add',AdminRankAddLivewire::class)->name('admin.rank.add');
Route::get('admin/grade/add',AdminGradeAddLivewire::class)->name('admin.grade.add');
Route::get('admin/grade/edit/{grade_id}',AdminGradeEditLivewire::class)->name('admin.grade.edit');
Route::get('admin/grade',AdminGradeLivewire::class)->name('admin.grade');
Route::get('admin/bill/',AdminBillLivewire::class)->name('admin.bill');
Route::get('admin/bill/edit/{bill_id}',AdminBillEditLivewire::class)->name('admin.bill.edit');
Route::get('admin/allowance',AdminAllowanceLivewire::class)->name('admin.allowance');
Route::get('admin/allownace/edit/{allowance_id}',AdminAllowanceEditLivewire::class)->name('admin.allowance.edit');
Route::get('admin/allowance/add',AdminAllowanceAddLivewire::class)->name('admin.allowance.add');
Route::get('admin/issuedsalary',AdminIssuedSalaryLivewire::class)->name('admin.issued.salary');


Route::get('admin/issuedsalary/edit/{user_id}',AdminIssuedSalaryEditLivewire::class)->name('admin.issuedsalary.edit');
Route::get('admin/issuedsalary/add',AdminIssuedSalaryAddLivewire::class)->name('admin.issuedsalary.add');




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


