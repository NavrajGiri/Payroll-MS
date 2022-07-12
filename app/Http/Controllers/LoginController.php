<?php

namespace App\Http\Controllers;
use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    
        function insert1 (){
         $login = new login();
         $login->admin_code ="272606";        
         $login->admin_name ="lcpl";
         $login->admin_email ="navraj";
         $login->admin_password ="giri";
       
         // echo $login->computer_no;
        //  $login->save();
        
    
     }
 
 
     function update1 () {
         $login = Login::find();
         $login->computer_no  = 272606;
         $login->save;
     }
 
     function delete1 (){
         $login =login::find();
         $login->delete();
 
     }
 
     function view1 (){
         $result = employee::find();
         $data = ["efgh"=>$result];
         return view ("login_display",$data);
 
     }
 }
 

