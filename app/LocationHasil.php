<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationHasil extends Model
{
    protected $table = 'uhb_hotels_locations_description_copy1';

    protected $fillable = [
        'id',
        // 'agency_location_id',
        'hotel_location_id',
        'language_id',
        'name',
        // 'formatted_address',
        // 'latitude',
        // 'longitude',
        'province',
        'city'
    ];

    public $timestamps = false;
}
