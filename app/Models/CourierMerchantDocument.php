<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourierMerchantDocument extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'courier_id',
        'document_path',
        'created_by'
    ];

    public function courier_merchant()
    {
        return $this->belongsTo(CourierMerchant::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class);
    }
}
