<?php

namespace App\Http\Livewire;
use App\Models\Bill;
use Livewire\Component;

class UserBillLivewire extends Component
{


    public function render()
    {
        $all_bill = Bill::all();
        return view('livewire.user-bill-livewire',['all_bills'=>$all_bill]);
    }
}
