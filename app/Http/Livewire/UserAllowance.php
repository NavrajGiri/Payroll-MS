<?php

namespace App\Http\Livewire;

use App\Models\Allowance;
use Livewire\Component;

class UserAllowance extends Component
{
    public function render()
    {
        $all_allowance = Allowance::where('user_id',auth()->user()->id);
        return view('livewire.user-allowance',['all_allowance'=>$all_allowance]);
    }
}
