<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(){
schema::create("allowance",function(Blueprint $table){
    $table->id();
    $table->string(user_id);
    $table->string(allowance_name);
    $table->string(allowance_details);
    $table->string(allowance_type);
    $table->string(amount);
    $table->string(total);
    $table->string(issued_salary_id);
    $table->string(issue_date);
    $table->string(issue_date);
    $table->string(created_at);
    $table->string(updated_at);

    $table->timestamps();

});
}

public function down(){

}
};
