<?php

namespace App\Http\Livewire;
use App\Models\IssuedSalary;
use Livewire\Component;

class AdminIssuedSalaryEditLivewire extends Component
{
<<<<<<< HEAD
    public $issuedsalary_id, $user_id,$date, $note, $amount,$issued_by;
     function mount($issuedsalary_id){
        $this->issuedsalary = $issuedsalary_id;
        $issuedsalary = IssuedSalary::find($issuedsalary_id);
        $this->issuedsalary = $issuedsalary ->user_id;
=======
    public $user_id,$date, $note, $amount,$issued_by;
     function mount($user_id){
        $this->issuedsalary = $user_id;
        $grade = IssuedSalary::find($user_id);
        $this->date = $issuedsalary->date;
>>>>>>> 327d51edc42f865b900fe158af5a58ff9dca8c0e
        $this->note = $issuedsalary->note;
        $this->amount = $issuedsalary->amount;
        $this->issued_by = $issuedsalary->issued_by;
    }
   function save(){
<<<<<<< HEAD
        $issuedsalary = IssuedSalary::find($this->issuedsalary_id);
        $issuedsalary->user_id = $this->user_id;
=======
        $issuedsalary = Grade::find($this->user_id);
>>>>>>> 327d51edc42f865b900fe158af5a58ff9dca8c0e
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
