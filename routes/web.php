<?php
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

use Illuminate\Support\Facades\Route;
use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule;
<<<<<<< HEAD
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


=======
//    user
use App\Http\Livewire\UserDashboardLivewire;
use App\Http\Livewire\UserPaymentLivewire;
use App\Http\Livewire\UserBillLivewire;
use App\Http\Livewire\UserAllowance;
use App\Http\Livewire\UserBillAddLivewire;
use App\Http\Livewire\UserBillEditLivewire;
>>>>>>> 075d2d8b350edcc4cf18fae559757be033abe958


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


// user
