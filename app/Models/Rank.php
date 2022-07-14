<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    use HasFactory;
    protected $table = "ranks";
    protected $fillable = ["name"];

     function grade(){
        return $this->hasMany(grade::class);
     }
}
