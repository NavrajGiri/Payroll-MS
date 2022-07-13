<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(){
        Schema::create("users",function(Blueprint $table){
            $table->id();
            $table->string('computer_no');
            $table->string('rank');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('merital_status');
            $table->string('address');
            $table->string('phone_no');
            $table->string('joining_date');
            $table->string('blood_group');
            $table->string('pan_no');
            $table->string('bank_no');
            $table->string('account_no');
            $table->string('grade_id');
            $table->string('nagrik_lagani_kosh_no');
            $table->string('type');

            $table->timestamps();

        });
    }


    public function down(){
    }
};
