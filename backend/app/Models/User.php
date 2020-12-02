<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @OA\Schema(
 *     title="User",
 * required={"name", "email", "password"},
  * )
*  
* @OA\Property(
* property="name",
* type="string",
* description="User name",
* example="John Conor"
* )
* @OA\Property(
* property="email",
* type="string",
* description="Email Address",
* example="john.conor@terminator.com"
* )

* @OA\Property(
* property="password",
* type="string",
* description="A very secure password",
* example="123456"
* )
         
 */

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'users';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /* Relationship.
    ** @var string
    */
    public function bikes()
    {
        return $this->hasMany(App\Bike);
    }

}
