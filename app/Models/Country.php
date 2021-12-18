<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'zipcode',
        'flag'
    ];

    public function courier_merchants(){
        return $this->hasMany(CourierMerchant::class);
    }

    public function states(){
        return $this->hasMany(State::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
    
}
