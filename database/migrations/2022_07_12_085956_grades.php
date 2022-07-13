<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(){
        Schema::create("grade",function(Blueprint $table){
            $table->id();
            $table->string('rank_id');
            $table->string('grade_name');
            $table->string('salary_amount');
            $table->timestamps();
        });
    }


    public function down()
    {
        //
    }
};
