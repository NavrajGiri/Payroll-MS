<?php

namespace App\Http\Livewire;
use App\Models\Bill;
use Livewire\Component;

class UserBillAddLivewire extends Component
{

    public $bill_no,$user_id,$product_name,$product_details,$quantity,$amount,$issued_salary_id,$total_amount;

        public function save(){
            $bill = new Bill();
            $bill->bill_no = $this->bill_no;
            $bill->user_id = auth()->user()->id;
            $bill->product_name = $this ->product_name;
            $bill->product_details = $this ->product_details;
            $bill->quantity = $this ->quantity;
            $bill->amount = $this ->total_amount;
            $bill->total_amount = $this->total_amount;
            $bill->save();

            return redirect(route('admin.bill'));

        }

        public function render()
        {
            return view('livewire.user-bill-add-livewire');
        }
    }
