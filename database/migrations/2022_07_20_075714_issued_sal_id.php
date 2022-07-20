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
        Schema::table("bills",function(Blueprint $table){
            $table->dropColumn('issue_salary_id');
        });
        Schema::table("allowance",function(Blueprint $table){
            $table->dropColumn('issued_salary_id');
        });

        Schema::table("bills",function(Blueprint $table){
            $table->string('issued_salary_id')->nullable();
        });
        Schema::table("allowance",function(Blueprint $table){
            $table->string('issued_salary_id')->nullable();
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
