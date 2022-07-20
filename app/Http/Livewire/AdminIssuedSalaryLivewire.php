<?php

namespace App\Http\Livewire;
use App\Models\IssuedSalary;

use Livewire\Component;

class AdminIssuedSalaryLivewire extends Component
{
    public function render()
    {
        $all_issuedsalary = IssuedSalary::all();
        return view('livewire.admin-issuedsalary-livewire',['all_issuedsalary'=>$all_issuedsalary]);
    }
}
