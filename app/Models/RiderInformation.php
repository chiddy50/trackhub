<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiderInformation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'rider_id',
        'vehicle_type_id',
        'plate_number',
        'licence_path'
    ];

    public function vehicle_type()
    {
        return $this->belongsTo(VehicleType::class);
    }

    public function rider()
    {
        return $this->belongsTo(Rider::class);
    }
}
