<?php

namespace App\Http\Livewire;
use App\Models\Bill;

use Livewire\Component;

class AdminBillLivewire extends Component
{
    public function render()
    {
        $all_bills = Bill::all();
        return view('livewire.admin-bill-livewire',['all_bill'=>$all_bill]);
    }
}