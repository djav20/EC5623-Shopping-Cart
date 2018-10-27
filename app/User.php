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
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function orders() {
        return $this->hasMany('App\Order');
    }

/** 
*    // Prueba para evitar el campo remenber token.
*    // Get the token value for the "remember me" session.
*    //
*    // @return string
*    //
*    public function getRememberToken()
*    {
*        return null;
*    }
*
*    // Set the token value for the "remember me" session.
*    //
*    // @param  string  $value
*    // @return void
*    public function setRememberToken($value)
*    {
*         // do nothing
*    }
*/
}
