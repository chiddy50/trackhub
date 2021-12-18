<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Rider extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'courier_id',
        'availability',
        'created_by'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['user_info'];

    /**
     * Get the rider user.
     *
     * @return string
     */
    public function getUserInfoAttribute()
    {
        $data = DB::table('users')
                ->join('users_information', 'users.id', '=', 'users_information.user_id')
                ->join('states', 'users_information.state_id', '=', 'states.id')
                ->join('countries', 'states.country_id', '=', 'countries.id')
                ->where('users.id', $this->user_id)
                ->select('users_information.*', 'countries.name as country', 'states.name as state')
                ->first();
        return $data;
    }

    public function courier_merchant()
    {
        return $this->belongsTo(CourierMerchant::class);
    }

    public function user_data(){
        // return $this->hasOne(User::class);
        return $this->belongsTo(User::class);
        
    }

    public function rider_information(){
        return $this->hasMany(RiderInformation::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class);
    }
}
