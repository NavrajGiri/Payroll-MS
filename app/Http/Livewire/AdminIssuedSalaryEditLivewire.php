<?php

namespace App\Http\Livewire;
use App\Models\IssuedSalary;
use App\Models\User;
use Livewire\Component;

class AdminIssuedSalaryEditLivewire extends Component
{
<<<<<<< HEAD
    public $issuedsalary_id, $user_id,$date, $note, $amount,$method,$issued_by;
     function mount($issuedsalary_id){
        $this->issuedsalary = $issuedsalary_id;
        $issuedsalary = IssuedSalary::find($issuedsalary_id);
        $this->issuedsalary = $issuedsalary ->user_id;
=======
    public $user_id,$date, $note, $amount,$issued_by;
     function mount($user_id){
        $this->issuedsalary = $user_id;
        $issuedsalary = IssuedSalary::find($issuedsalary);
>>>>>>> aed79d9124c41c0b6ddfcb8f832b5a2a1465147d
        $this->date = $issuedsalary->date;
        $this->note = $issuedsalary->note;
        $this->amount = $issuedsalary->amount;
        $issuedsalary->amount = $this->amount;
        $this->issued_by = $issuedsalary->issued_by;
    }
   function save(){
        $issuedsalary = Grade::find($this->user_id);
        $issuedsalary->date = $this->date;
        $issuedsalary->note = $this->note;
        $issuedsalary->amount = $this->amount;
        $issuedsalary->amount = $this->amount;
        $issuedsalary->issued_by = $this->issued_by;

        $issuedsalary->save();

        return redirect(route('admin.issuedsalary'));
    }
    public function render()
    {
        $all_issuedsalary = IssuedSalary::all();
            return view('livewire.admin-issued-salary-edit-livewire',['all_issuedsalary'=>$all_issuedsalary]);



        $all_users = User::all();
            return view('livewire.admin-issued-salary-edit-livewire',['all_users'=>$all_users]);
        }


  }

