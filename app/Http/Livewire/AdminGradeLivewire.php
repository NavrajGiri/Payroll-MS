<?php

namespace App\Http\Livewire;
use App\Models\Grade;

use Livewire\Component;

class AdminGradeLivewire extends Component
{
    public function render()
    {
        $all_grade = Grade::all();
        return view('livewire.admin-grade-livewire',['all_grade'=>$all_grade]);
    }
}
