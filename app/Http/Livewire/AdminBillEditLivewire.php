<?php

namespace App\Http\Livewire;
Use App\Models\Bill;
use Livewire\Component;

class AdminBillEditLivewire extends Component
{

    public $bill_id, $bill_no, $user_id, $product_name,$product_details,$quantity,$amount,$issued_salary_id,$total_amount;
    public function mount($bill_id){
        $this->bill_id = $bill_id;
        $bill = Bill::find($bill_id);
        $this->bill_no = $bill->bill_no;
        $this->user_id = $bill->user_id;
        $this->product_name = $bill->product_name;
        $this->product_details = $bill->product_details;
        $this->quantity = $bill ->quantity;
        $this->amount = $bill ->amount;
        $this->issued_salary_id = $bill->issued_salary_id;
        $this->total_amount = $bill->total_amount;

    }

            public function save(){
            $bill = Bill::find($this->bill_id);
            $bill->bill_no = $this->bill_no;
            $bill->user_id = $this->user_id;
            $bill->product_name = $this ->product_name;
            $bill->product_details = $this ->product_details;
            $bill->quantity = $this ->quantity;
            $bill->amount = $this ->amount;
            $bill->issued_salary_id = $this ->issued_salary_id;
            $bill->total_amount = $this->total_amount;
            $bill->save();

            return redirect(route('admin.bill'));


        }

        public function render()
        {
            return view('livewire.admin-bill-edit-livewire');
        }

    }

