<?php

namespace App\Http\Livewire;
use App\Models\IssuedSalary;
use Livewire\Component;

class AdminIssuedSalaryEditLivewire extends Component
{
    public $issuedsalary_id, $user_id,$date, $note, $amount,$issued_by;
     function mount($issuedsalary_id){
        $this->issuedsalary = $issuedsalary_id;
        $issuedsalary = IssuedSalary::find($issuedsalary_id);
        $this->issuedsalary = $issuedsalary ->user_id;
        $this->date = $issuedsalary->date;
        $this->note = $issuedsalary->note;
        $this->amount = $issuedsalary->amount;
        $this->issued_by = $issuedsalary->issued_by;
    }
   function save(){
        $issuedsalary = IssuedSalary::find($this->issuedsalary_id);
        $issuedsalary->user_id = $this->user_id;
        $issuedsalary = IssuedSalary::find($this->user_id);
        $issuedsalary->date = $this->date;
        $issuedsalary->note = $this->note;
        $issuedsalary->amount = $this->amount;
        $issuedsalary->issued_by = $this->issued_by;

        $issuedsalary->save();

        return redirect(route('admin.issuedsalary'));
    }
    public function render()
    {
        return view('livewire.admin-issuedsalary-edit-livewire');
    }
}