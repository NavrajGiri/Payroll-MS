<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


    public function up()
    {
    Schema::create("promotion_history",function(Blueprint $table){
        $table->id();
        $table->string('user_id');
        $table->string('date');
        $table->string('grade');
        $table->timestamps();
    });
    }



    public function down()
    {
        //
    }
};
