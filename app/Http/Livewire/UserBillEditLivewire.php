<?php

namespace App\Http\Livewire;
use App\Models\Bill;
use App\Models\User;
use Livewire\Component;
use App\Models\Grade;
use App\Models\IssuedSalary;
class UserBillEditLivewire extends Component
{


        public $bill_id,$bill_no,$user_id,$product_name,$product_details,$quantity,$amount,$issued_salary_id,$total_amount;
        public function mount($bill_id){
            $this->bill_id = $bill_id;
            $bill = Bill::find($bill_id);
            $this->bill_no = $bill->bill_no;
            $this->product_name = $bill->product_name;
            $this->product_details = $bill->product_details;
            $this->quantity = $bill ->quantity;
            $this->amount = $bill ->amount;
            $this->issued_salary_id = $bill->issued_salary_id;
            $this->total_amount = $bill->total_amount;

        }

        public function save(){
            $bill = Bill::find($this->bill_id);
            $bill->bill_no = $bill->bill_no;
            $bill->product_name = $bill ->product_name;
            $bill->product_details = $bill ->product_details;
            $bill->quantity = $bill ->quantity;
            $bill->amount = $bill ->amount;
            $bill->issued_salary_id = $bill ->issued_salary_id;
            $bill->total_amount = $bill->total_amount;
            $bill->save();
            return redirect(route('admin.bill'));
        }


    public function render()
    {
        $all_issuedsalary = Issuedsalary::all();
        $all_users = User::all();
        return view('livewire.user-bill-edit-livewire',[
            'all_users'=>$all_users,
            'all_issuedsalary'=>$all_issuedsalary,            
        ]);
    }
}
