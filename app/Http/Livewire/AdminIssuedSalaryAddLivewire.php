<?php

namespace App\Http\Livewire;
use App\Models\IssuedSalary;
use Livewire\Component;

class AdminIssuedSalaryAddLivewire extends Component
{
<<<<<<< HEAD
        public $user_id,$date,$note,$amount,$issued_by;
        function save(){
            $issuedsalary = new IssuedSalary();
            $issuedsalary = $this->user_id;
            $issuedsalary->date = $this->date;
            $issuedsalary->note = $this->note;
            $issuedsalary->amount = $this->amount;
            $issuedsalary->issued_by = $this->issued_by;

            $issuedsalary->save();
=======
    public $user_id,$grade_name,$salary_amount;
     function save(){
        $issuedsalary = new IssuedSalary();
        $issuedsalary = $this->user_id;
         $issuedsalary->date = $this->date;
        $issuedsalary->note = $this->note;
        $issuedsalary->amount = $this->amount;
        $issuedsalary->issued_by = $this->issued_by;
        $issuedsalary->save();
>>>>>>> 327d51edc42f865b900fe158af5a58ff9dca8c0e



            return redirect(route('admin.issuedsalary'));
        }
        public function render()
        {
            return view('livewire.admin-issuedsalary-add-livewire');
        }
    }
