<?php

namespace App;

use App\Notifications\UserResetPasswordNotification;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class BidUser extends Authenticatable
{
    use Notifiable;

    protected $table = 'bid_users';
    protected $primaryKey ='id';

    protected $guarded = [];

    protected $fillable = [
        'user_fname', 'email', 'password',
        'user_lname', 'user_phn1', 'user_phn2',
        'user_address', 'user_nic', 'user_active',
        'user_image'
    ];
  
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserResetPasswordNotification($token));
    }

    public function payments_gateways(){
        return $this->hasMany(Payments_Gateway::class);
    }

    
    public function payments_receipts(){
        return $this->hasMany(Payments_Receipt::class);
    }

    public function packages(){
        return $this->belongsToMany(Package::class);
    }


}