<?php

namespace App\Http\Controllers;
use App\Models\Bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    function insert2 (){
        $bill = new Bill();
        $bill->bill_no = "";
        $bill->product_name = "";
        $bill->product_details = "";
        $bill->quantity = "";
        $bill->amount = "";
        $bill->total_amount = "";

        // echo $bill->bill_no;
        //  $bill->save();

    }


    function update2 () {
        $bill =Bill::find();
        $bill->bill_no  = 272606;
        // $bill->save;
    }

    function delete2 (){
        $bill =bill::find();
        $bill->delete();

    }

    function view2 (){
        $bill = employee::find();
        $data = ["mnop"=>$result];
        return view ("bill_display",$data);

    }
}
