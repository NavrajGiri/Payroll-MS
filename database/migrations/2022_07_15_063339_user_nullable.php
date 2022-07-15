<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("users",function(Blueprint $table){
        $table->string('computer_no')->nullable();
        $table->string('rank')->nullable();
        $table->string('date_of_birth')->nullable();
        $table->string('gender')->nullable();
        $table->string('merital_status')->nullable();
        $table->string('address')->nullable();
        $table->string('phone_no')->nullable();
        $table->string('joining_date')->nullable();
        $table->string('blood_group')->nullable();
        $table->string('pan_no')->nullable();
        $table->string('bank_no')->nullable();
        $table->string('account_no')->nullable();
        $table->string('grade_id')->nullable();
        $table->string('nagrik_lagani_kosh_no')->nullable();
        $table->string('type')->nullable();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
