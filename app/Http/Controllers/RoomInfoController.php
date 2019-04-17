<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomInfo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RoomInfoController extends Controller
{
    public function queryAdd(){
        return view('layouts.addFlat');
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'room_name'             => 'required|string|max:255',
            'guest_no'              => 'required|string|max:255',
            'bed_no'                => 'required|string|min:6|confirmed',
            'bed_rooms'             => 'required|string|max:191',
            'bath'                  => 'required|string|max:191',
            'price_per_day'         => 'required|string|max:191',
            'room_details'          => 'required|string|max:191',
            'more_info'             => 'required|string|max:191',
            'accommodation_type'    => 'required|string|max:191',
            'zone'                  => 'required|string|max:191',
            'address'               => 'required|string|max:191',
            'house_rules'           => 'required|string|max:191',
            'neighborhood'          => 'required|string|max:191',
            'latitude'              => 'required|string|max:191',
            'longitude'             => 'required|string|max:191',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\RoomInfo
     */
    protected function queryInsert(array $data)
    {
        return RoomInfo::create([
            'room_name'             => $data['room_name'],
            'guest_no'              => $data['guest_no'],
            'bed_no'                => $data['bed_no'],
            'bed_rooms'             => $data['bed_rooms'],
            'bath'                  => $data['bath'],
            'price_per_day'         => $data['price_per_day'],
            'room_details'          => $data['room_details'],
            'more_info'             => $data['more_info'],
            'accommodation_type'    => $data['accommodation_type'],
            'zone'                  => $data['zone'],
            'address'               => $data['address'],
            'house_rules'           => $data['house_rules'],
            'neighborhood'          => $data['neighborhood'],
            'latitude'              => $data['latitude'],
            'longitude'             => $data['longitude'],
        ]);
    }














}
