<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomInfo;
use App\room_image;
use App\Http\Controllers\Controller;

class RoomInfoController extends Controller
{
    public function showAddFlatForm(){
        return view('layouts.addFlat');
    }



    /**
     * Create a new user instance after a valid registration.
     *
     * @param  Illuminate\Http\Request  $request
     * @return \App\RoomInfo
     */
    protected function queryInsert(Request $request)
    {
        $request->validate([
            'room_name'             => 'required|string|max:255',
            'guest_no'              => 'required|string|max:255',
            'bed_no'                => 'required|string|max:2',
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

        $validationRules = [
            'photo' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2050',
        ];

        $messages = [
            'photo.max' => 'Upload failed! image larger than 1MB',
        ];
        $request->validate($validationRules,$messages);


        $roomInfo = new RoomInfo();
        $roomInfo->room_name        = $request['room_name'];
        $roomInfo->guest_no         = $request['guest_no'];
        $roomInfo->bed_no           = $request['bed_no'];
        $roomInfo->bed_rooms        = $request['bed_rooms'];
        $roomInfo->bath             = $request['bath'];
        $roomInfo->price_per_day    = $request['price_per_day'];
        $roomInfo->room_details     = $request['room_details'];
        $roomInfo->more_info        = $request['more_info'];
        $roomInfo->accommodation_type    = $request['accommodation_type'];
        $roomInfo->zone             = $request['zone'];
        $roomInfo->address          = $request['address'];
        $roomInfo->house_rules      = $request['house_rules'];
        $roomInfo->neighborhood     = $request['neighborhood'];
        $roomInfo->latitude         = $request['latitude'];
        $roomInfo->longitude        = $request['longitude'];

        $roomInfo->save();

        $roomImage = new room_image();
        $upDir = public_path() . '/images/';
        $imgName = date('YmdHis') . '_';
          if ($request->hasFile('photo')) {
              $image = $request->file('photo');
              $roomImage->room_id = $roomInfo->id;
              $roomImage->room_image = 'photo-'.$roomInfo->id.$imgName. '.' . $image->getClientOriginalExtension();
              $image->move($upDir, $roomImage->room_image);
          }
          $roomImage->save();

        return redirect()->back();


    }

        public function showAllFlat(){
            $roominfo = RoomInfo::all();
            return view('showAllFlat')->with('flat',$roominfo);
        }













}
