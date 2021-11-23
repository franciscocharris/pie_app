<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// roles and permissions
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'document_type', 'document','name', 'email', 'password', 'terms',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // plantilla adminlte
    public function adminlte_image(){
        
        $social_profile = $this->socialProfiles->first();

        if($social_profile){
            return $social_profile->social_avatar;
        }else{
            return 'https://picsum.photos/300/300';
        }
        
    }

    public function adminlte_desc(){
        return "usuario";
        // if (\Auth::user()->roles()->first()) {
        //     return \Auth::user()->roles()->first()->name;
        // } else {
        //     return "usuario";
        // }
        
        
    }

    public function adminlte_profile_url()
    {
        // para la edicion propia de su usuario, 
        // se cambio directamente en la vista vendor/adminlte/common/navbar/user-menu-tal-tal
    }
    // fin plantilla admin

    // // relacion morph uno 
    // public function status(){
    //     return $this->morphOne('App\Models\Statussable', 'statussable');
    // }

    // relacion uno a muchos
    public function socialProfiles(){
        return $this->hasMany('App\Models\SocialProfile', 'user_id');
    }

    // uno a muchos
    // public function questions(){
    //     return $this->hasMany('App\Models\Question', 'users_id');
    // }

    // uno a uno polimorfica 
    public function images(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}

