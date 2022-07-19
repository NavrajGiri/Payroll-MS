<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(){
     Schema::create("issue_salary",function(Blueprint $table){
        $table->id();
        $table->string('user_id');
        $table->string('date');
        $table->string('note');
        $table->string('amount');
        $table->string('method');
        $table->string('issued_by');
        $table->timestamps();

     });
    }


    public function down() {
    }
};
