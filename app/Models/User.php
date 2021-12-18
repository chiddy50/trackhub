<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'account_type_id',
        'token',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'email',
        'password',
        'token',
        'remember_token',
    ];

    // /**
    //  * The attributes that should be cast.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];


    public function activities(){
        return $this->hasMany(Activity::class);
    }

    public function courier_merchant(){
        return $this->hasOne(CourierMerchant::class);
    }

    public function information(){
        return $this->hasOne(UsersInformation::class);
    }

    public function created_documents(){
        return $this->hasMany(CourierMerchantDocument::class);
    }

    public function created_riders(){
        return $this->hasMany(Rider::class);
    }

    public function rider_data()
    {
        // return $this->belongsTo(Rider::class);
        return $this->hasMany(Rider::class);
    }

    public function account_type()
    {
        return $this->belongsTo(AccountType::class);
    }

}
