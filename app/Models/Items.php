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

    public function ter() {
        return $this->belongsTo(User::class,'owner');
    }

}
