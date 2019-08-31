<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','privilege', 'email', 'password','full_name','document','number','country','language_id'
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
    
    public function hasRoles(array $roles)//admin y normal
    {
       
      
      
       foreach ($roles as $role) 
        {
                if ($this->privilege == $role)
                {
                    return true;
                }       

        }
       return false;
    }

    public function language() {
        return $this->hasOne('App\Language', 'id'); // Le indicamos que se va relacionar con el atributo id
    }
}
