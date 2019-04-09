<?php

use Illuminate\Database\Seeder;
use App\Amenities;

class AmenitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amenities = new Amenities;
        $amenities->amenity_name = 'shower';
        $amenities->save();
    }
}
