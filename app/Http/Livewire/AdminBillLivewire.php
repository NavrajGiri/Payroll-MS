<?php

namespace App\Http\Livewire;
use App\Models\Bill;

use Livewire\Component;

class AdminBillLivewire extends Component
{
    public function render()
    {

        $all_bill = Bill::all();
        return view('livewire.admin-bill-livewire',['all_bills'=>$all_bill]);
        $all_bill = Bills::all();
        return view('livewire.admin-bill-livewire',['all_bills'=>$all_bills]);
    }
}
