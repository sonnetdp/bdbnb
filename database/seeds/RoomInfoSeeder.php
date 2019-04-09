<?php

use Illuminate\Database\Seeder;
use App\RoomInfo;
class RoomInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $room_info = new RoomInfo;

      $room_info->room_name     = 'shower';
      $room_info->guest_no      = 2;
      $room_info->bed_no        = 2;
      $room_info->bed_rooms     = 10;
      $room_info->bath          = 2;
      $room_info->price_per_day = 5000.00;
      $room_info->room_details  = 'Double';
      $room_info->more_info     = '';
      $room_info->accommodation_type = '';
      $room_info->zone          = '';
      $room_info->address       = '';
      $room_info->house_rules   = '';
      $room_info->neighborhood  = '';
      $room_info->latitude      = '';
      $room_info->longitude     = '';
      $room_info->save();
    }
}
