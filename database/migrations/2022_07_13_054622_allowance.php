<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(){
        Schema::table("allowance", function(Blueprint $table){
  
        $table->string('user_id');
        $table->string('allowance_name');
        $table->string('allowance_details');
        $table->string('allowance_type');
        $table->string('amount');
        $table->string('total');
        $table->string('issued_salary_id');
        $table->string('issue_date');
    });
}
    public function down()
    {
        
    }
};
