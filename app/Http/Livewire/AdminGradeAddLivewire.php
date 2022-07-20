<?php

namespace App\Http\Livewire;
use App\Models\Grade;
use Livewire\Component;

class AdminGradeAddLivewire extends Component
{
    public $rank_id,$grade_name,$salary_amount;
     function save(){
        $grade = new Grade();
        $grade->rank_id = $this->rank_id;
        $grade->grade_name = $this->grade_name;
        $grade->salary_amount = $this->salary_amount;
        $grade->save();

        return redirect(route('admin.grade'));
    }
    public function render()
    {
        return view('livewire.admin-grade-add-livewire');
    }
}
