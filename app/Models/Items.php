<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo(Categories::class,'categories_id');
    }

    public function owner() {
        return $this->belongsTo(User::class,'owner_id','id');
    }

    public function coupons() {
        return $this->hasMany(Coupons::class,'item_id','id');
    }

}
