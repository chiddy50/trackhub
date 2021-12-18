<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourierMerchant extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'company_name',
        'company_address',
        'company_phone',
        'working_opening_time',
        'working_closing_time',
        'cac_number',
        'cac_document_path',
        'country_id',
        'state_id',
        'activated',
        'fleet_rate_limit',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function courier_merchant_document(){
        return $this->hasOne(CourierMerchantDocument::class);
    }

    public function riders(){
        return $this->hasMany(Rider::class);
    }
}
