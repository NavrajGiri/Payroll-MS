<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserBillAddLivewire extends Component
{

    public $bill_id,$bill_no,$user_id,$product_name,$product_details,$quantity,$amount,$issued_salary_id,$total_amount;

        public function save(){
            $bill = new Bill();
        $bill->bill_id = $this->bill_id;
        $bill->bill_no = $bill->bill_no;
        $bill->user_id = $bill->user_id;
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
            return view('livewire.user-bill-add-livewire');
        }
    }
