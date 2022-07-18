<?php

namespace App\Http\Livewire;
use App\Models\Bills;

use Livewire\Component;

class AdminBillLivewire extends Component
{
    public function render()
    {
        $all_bills = Bills::all();
        return view('livewire.admin-bill-livewire',['all_bills'=>$all_bills]);
    }
}