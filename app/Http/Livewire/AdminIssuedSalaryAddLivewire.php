<?php

namespace App\Http\Livewire;
use App\Models\IssuedSalary;
use Livewire\Component;

class AdminIssuedSalaryAddLivewire extends Component
{
        public $user_id,$date,$note,$amount,$issued_by;
        function save(){
            $issuedsalary = new IssuedSalary();
            $issuedsalary = $this->user_id;
            $issuedsalary->date = $this->date;
            $issuedsalary->note = $this->note;
            $issuedsalary->amount = $this->amount;
            $issuedsalary->issued_by = $this->issued_by;

            $issuedsalary->save();


            return redirect(route('admin.issuedsalary'));
        }
        public function render()
        {
            return view('livewire.admin-issued-salary-add-livewire');
        }
    }