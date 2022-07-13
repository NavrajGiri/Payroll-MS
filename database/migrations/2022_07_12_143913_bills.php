<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(){
        Schema::create("bills",function(Blueprint $table){
          $table->id();
          $table->string('bill_no');
          $table->string('user_id');
          $table->string('product_name');
          $table->string('product_details');
          $table->string('quantity');
          $table->string('amount');
          $table->string('issue_salary_id');
          $table->string('total_amount');
          $table->timestamps();
        });
    }


    public function down() {
    }
};
