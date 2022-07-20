<?php

namespace App\Http\Livewire;
Use App\Models\Bill;
use Livewire\Component;

class AdminBillEditLivewire extends Component
{

    public $bills_id, $bill_no, $user_id, $product_name,$product_details,$quantity,$amount,$issued_salary_id,$total_amount;
    public function mount($bills_id){
        $this->bills_id = $bills_id;
        $bill = Bill::find($bills_id);
        $this->bill_no = $bill->bill_no;
        $this->user_id = $bill->user_id;
        $this->product_name = $bill->product_name;
        $this->product_details = $bill->product_details;
        $this->quantity = $bill ->quantity;
        $this->amount = $bill ->amount;
        $this->issue_salary_id = $bill->issue_salary_id;
        $this->total_amount = $bill->total_amount;

    }

                public function save(){
                    $bill = new Bill();
            $bill->bills_id = $this->bills_id;
            $bill->bill_no = $bill->bill_no;
            $bill->user_id = $bill->user_id;
            $bill->product_name = $bill ->product_name;
            $bill->product_details = $bill ->product_details;
            $bill->quantity = $bill ->quantity;
            $bill->amount = $bill ->amount;
            $bill->issue_salary_id = $bill ->issue_salary_id;
            $bill->total_amount = $bill->total_amount;
            $bill->save();



        }

        public function render()
        {
            return view('livewire.admin-bill-edit-livewire');
        }

    }

