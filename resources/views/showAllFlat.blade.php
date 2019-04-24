@extends('layouts.index')
@section('index_body')
<div class="container">
    <div class="row col-md-12">
        <h2>All Flats</h2>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Room Name</th>
                <th>Guest No</th>
                <th>Bed No</th>
                <th>Bedrooms</th>
                <th>Bath</th>
                <th>Price per day</th>
                <th>Room details</th>
                <th>More info</th>
                <th>Accommodation type</th>
                <th>Zone</th>
                <th>Address</th>
                <th>House rules</th>
                <th>Neighborhood</th>
                <th>Latitude</th>
                <th>Longitude</th>
              </tr>
            </thead>
            <tbody>
            <tbody>
                @foreach($flat AS $flat_details)
              <tr>
                <td>{{$flat_details->room_name}}</td>
                <td>{{$flat_details->guest_no}}</td>
                <td>{{$flat_details->bed_no}}</td>
                <td>{{$flat_details->bed_rooms}}</td>
                <td>{{$flat_details->bath}}</td>
                <td>{{$flat_details->price_per_day}}</td>
                <td>{{$flat_details->room_details}}</td>
                <td>{{$flat_details->more_info}}</td>
                <td>{{$flat_details->accommodation_type}}</td>
                <td>{{$flat_details->zone}}</td>
                <td>{{$flat_details->address}}</td>
                <td>{{$flat_details->house_rules}}</td>
                <td>{{$flat_details->neighborhood}}</td>
                <td>{{$flat_details->latitude}}</td>
                <td>{{$flat_details->longitude}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
