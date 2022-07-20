<?php

namespace App\Http\Livewire;
use App\Models\IssuedSalary;

use Livewire\Component;

class AdminIssuedSalaryLivewire extends Component
{
    public function render()
    {
        $all_issue_salary = IssuedSalary::all();
        return view('livewire.admin-issue-salary-livewire',['all_issue-salary'=>$all_issue_salary]);
    }
}
