<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'country_id'
    ];

    public function courier_merchants(){
        return $this->hasMany(CourierMerchant::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
