<?php

namespace App\Http\Livewire;
use App\Models\Grade;
use Livewire\Component;

class AdminGradeEditLivewire extends Component
{
    public $grade_id,$rank_id, $grade_name, $salary_amount;
     function mount($grade_id){
        $this->grade_id = $grade_id;
        $grade = Grade::find($grade_id);
        $this->rank_id = $grade->rank_id;
        $this->grade_name = $grade->grade_name;
        $this->salary_amount = $grade->salary_amount;
    }
   function save(){
        $grade = Grade::find($this->grade_id);
        $grade->rank_id = $this->rank_id;
        $grade->grade_name = $this->grade_name;
        $grade->salary_amount = $this->salary_amount;

        $grade->save();

        return redirect(route('admin.grade'));
    }
    public function render()
    {
        return view('livewire.admin-grade-edit-livewire');
    }
}
