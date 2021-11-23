<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "questions";

    // uno a muchos inverso (muchos a uno)
    public function user(){
        return $this->belongsTo('App\Models\User', 'users_id');
    }

    // uno a muchos inverso (muchos a uno)
    public function product(){
        return $this->belongsTo('App\Models\Product', 'products_id');
    }

    
}
