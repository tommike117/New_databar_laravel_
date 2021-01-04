<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class User extends Authenticatable
{
    use Notifiable;


    protected $connection = 'user';
    protected $table = 'sv_user';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'User_Email', 'User_Password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'User_Password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'User_Email_Verified_At' => 'datetime',
    ];

    // public function getStatusAttribute()
    // {
    //     $user = DB::connection('user')->table('sv_user')->first();
    //     dd($user);
    //     // return $user->profiles->status
    // }
}
