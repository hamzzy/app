<?php

namespace App;

use App\Notifications\VerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'phone','password','token'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function post(){
        return  $this->hasMany(Post::class);
    }
    /**
     * The.
     *
     * @return bool
     */
    public function verified(){

        return $this->token === null;
    }


    /**
     * send user verification email

     * @return void

     */

    public function verificationemail ($thisUser){
        return Mail::to($thisUser['email'])->notify(new VerifyEmail($this));
             }
}
