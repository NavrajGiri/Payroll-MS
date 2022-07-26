<?php

namespace App\Http\Livewire;

use App\Models\IssuedSalary;
use Livewire\Component;

class UserPaymentLivewire extends Component
{
    public function render()
    {
        $issued_salaries = IssuedSalary::where('user_id',auth()->user()->id)->get();
        return view('livewire.user-payment-livewire',['issued_salaries'=>$issued_salaries]);
    }
}
