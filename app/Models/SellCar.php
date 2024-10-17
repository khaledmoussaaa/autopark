<?php

namespace App\Models;

class SellCar extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'car_type',
        'car_model',
        'year',
        'kilometers',
        'transmissions',
        'user_id',
    ];

    // =========== Relations =========== //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
