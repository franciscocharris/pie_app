<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";
    protected $fillable = [
        'image_path',
    ];

    // en nesesaria este metodo
    public function imageable(){
        return $this->morphTo();
    }
}
