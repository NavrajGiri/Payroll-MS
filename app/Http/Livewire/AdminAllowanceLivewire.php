<?php

namespace App\Http\Livewire;
use App\Models\Allowance;

use Livewire\Component;

class AdminAllowanceLivewire extends Component
{
    public function render()
    {
        $all_allowance = allowance::all();
        return view('livewire.admin-allowance-livewire',['all_allowance'=>$all_allowance]);
    }
}
