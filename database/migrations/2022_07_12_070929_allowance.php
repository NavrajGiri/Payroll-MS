<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(){
        Schema::create("allowance",function(Blueprint $table){
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('allowance_name')->nullable();
            $table->string('allowance_details')->nullable();
            $table->string('allowance_type')->nullable();
            $table->string('amount')->nullable();
            $table->string('total')->nullable();
            $table->string('issued_salary_id')->nullable();
            $table->dateTime('issue_date')->nullable();
            $table->timestamps();
        });
    }

    public function down(){

    }
};
