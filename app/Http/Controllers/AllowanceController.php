<?php

namespace App\Http\Controllers;
use App\Models\Allowance;
use Illuminate\Http\Request;

class AllowanceController extends Controller
{
    function insert4 (){
        $allowance = new allowance ();
        $allowance->computer_no = "";
        $allowance->rank = "";
        $allowance->name = "";
        $allowance->allowance_name = "";
        $allowance->allowance_details = "";
        $allowance->allowance_type ="";
        $allowance->amount ="";
        $allowance->method = "";
        $allowance->total ="";
        $allowance->issue_date = "";
        $allowance->issue_by = "";

    }


    function update4 () {
        $allowance =allowance::find();
        $allowance->computer_no  = 272606;
        $allowance->save;
    }

    function delete4 (){
        $allowance =allowance::find();
        $allowance->delete();

    }

    function view4 (){
        $allowance = allowance::find();
        $data = ["qrst"=>$result ];
        return view ("allowance_display",$data);

    }
}


