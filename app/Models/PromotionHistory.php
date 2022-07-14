<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionHistory extends Model
{
    use HasFactory;
    protected $table = "promotion_history";
    protected $fillable = ["user_id","date","grade",];

    Function user(){
        return $this->belongsTo(user::class);
    }



}
