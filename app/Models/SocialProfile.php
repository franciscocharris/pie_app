<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialProfile extends Model
{
    protected $table = 'social_profiles';

    // muchos a uno (uno a muchos inverso)
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
