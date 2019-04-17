<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomInfo extends Model
{
    protected $fillable = [
        'room_name','guest_no','bed_no','bed_rooms','bath','price_per_day','room_details','more_info','accommodation_type','zone','address','house_rules','neighborhood','latitude','longitude'
    ];
}
