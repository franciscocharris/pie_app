<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';
    
    //uno a muchos
    public function sub_categories(){
        return $this->hasMany('App\Models\Sub_categorie', 'categories_id');
    }

    // relacion uno a muchos polimorfica
    public function images(){
        return $this->morphMany('App\Models\Image', 'imageable');
    }
}
