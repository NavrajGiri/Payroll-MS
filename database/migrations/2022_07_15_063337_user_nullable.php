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
        $table->dropColumn('computer_no');
        $table->dropColumn('rank');
        $table->dropColumn('date_of_birth');
        $table->dropColumn('gender');
        $table->dropColumn('merital_status');
        $table->dropColumn('address');
        $table->dropColumn('phone_no');
        $table->dropColumn('joining_date');
        $table->dropColumn('blood_group');
        $table->dropColumn('pan_no');
        $table->dropColumn('bank_no');
        $table->dropColumn('account_no');
        $table->dropColumn('grade_id');
        $table->dropColumn('nagrik_lagani_kosh_no');
        $table->dropColumn('type');
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
