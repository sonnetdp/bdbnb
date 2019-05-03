@extends('layouts.index')
@section('index_body')

<div class="col-md-8" id="reg_form">
  <h5>Register your flat</h5>
  <hr>
    <form class="form-horizontal" method="POST" action="{{url('/user/addFlat')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('rname') ? ' has-error' : '' }}">
                    <label for="rname" class="col-md-12 control-label">Room Name</label>

                    <div class="col-md-12">
                        <input id="rname" type="text" class="form-control" name="room_name" value="{{ old('room_name') }}" required autofocus>

                        @if ($errors->has('rname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('rname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('guest_no') ? ' has-error' : '' }}">
                    <label for="guest_no" class="col-md-12 control-label">Guest No</label>

                    <div class="col-md-12">
                        <input id="guest_no" type="text" class="form-control" name="guest_no" value="{{ old('guest_no') }}" required autofocus>

                        @if ($errors->has('guest_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('guest_no') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('bed_no') ? ' has-error' : '' }}">
                    <label for="bed_no" class="col-md-12 control-label">Bed No</label>

                    <div class="col-md-12">
                        <input id="bed_no" type="text" class="form-control" name="bed_no" value="{{ old('bed_no') }}" required autofocus>

                        @if ($errors->has('bed_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bed_no') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('bed_rooms') ? ' has-error' : '' }}">
                    <label for="bed_rooms" class="col-md-12 control-label">Bed Rooms</label>

                    <div class="col-md-12">
                        <input id="bed_rooms" type="text" class="form-control" name="bed_rooms" value="{{ old('bed_rooms') }}" required autofocus>

                        @if ($errors->has('bed_rooms'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bed_rooms') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('bath') ? ' has-error' : '' }}">
                    <label for="bath" class="col-md-12 control-label">Bath</label>

                    <div class="col-md-12">
                        <input id="bath" type="text" class="form-control" name="bath" value="{{ old('bath') }}" required autofocus>

                        @if ($errors->has('bath'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bath') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('price_per_day') ? ' has-error' : '' }}">
                    <label for="price_per_day" class="col-md-12 control-label">Price Per Day</label>

                    <div class="col-md-12">
                        <input id="price_per_day" type="text" class="form-control" name="price_per_day" value="{{ old('price_per_day') }}" required autofocus>

                        @if ($errors->has('price_per_day'))
                            <span class="help-block">
                                <strong>{{ $errors->first('price_per_day') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('room_details') ? ' has-error' : '' }}">
                    <label for="room_details" class="col-md-12 control-label">Room Details</label>

                    <div class="col-md-12">
                        <input id="room_details" type="text" class="form-control" name="room_details" value="{{ old('room_details') }}" required autofocus>

                        @if ($errors->has('room_details'))
                            <span class="help-block">
                                <strong>{{ $errors->first('room_details') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('more_info') ? ' has-error' : '' }}">
                    <label for="more_info" class="col-md-12 control-label">More Information</label>

                    <div class="col-md-12">
                        <input id="more_info" type="text" class="form-control" name="more_info" value="{{ old('more_info') }}" required autofocus>

                        @if ($errors->has('more_info'))
                            <span class="help-block">
                                <strong>{{ $errors->first('more_info') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('accommodation_type') ? ' has-error' : '' }}">
                    <label for="accommodation_type" class="col-md-12 control-label">Accommodation Type</label>

                    <div class="col-md-12">
                        <input id="accommodation_type" type="text" class="form-control" name="accommodation_type" value="{{ old('accommodation_type') }}" required autofocus>

                        @if ($errors->has('accommodation_type'))
                            <span class="help-block">
                                <strong>{{ $errors->first('accommodation_type') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('zone') ? ' has-error' : '' }}">
                    <label for="zone" class="col-md-12 control-label">Zone</label>

                    <div class="col-md-12">
                        <input id="zone" type="text" class="form-control" name="zone" value="{{ old('zone') }}" required autofocus>

                        @if ($errors->has('zone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('zone') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                    <label for="address" class="col-md-12 control-label">Address</label>

                    <div class="col-md-12">
                        <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                        @if ($errors->has('address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('house_rules') ? ' has-error' : '' }}">
                    <label for="house_rules" class="col-md-12 control-label">House Rules</label>

                    <div class="col-md-12">
                        <input id="house_rules" type="text" class="form-control" name="house_rules" value="{{ old('house_rules') }}" required autofocus>

                        @if ($errors->has('house_rules'))
                            <span class="help-block">
                                <strong>{{ $errors->first('house_rules') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('neighborhood') ? ' has-error' : '' }}">
                    <label for="neighborhood" class="col-md-12 control-label">Neighborhood</label>

                    <div class="col-md-12">
                        <input id="neighborhood" type="text" class="form-control" name="neighborhood" value="{{ old('neighborhood') }}" required autofocus>

                        @if ($errors->has('neighborhood'))
                            <span class="help-block">
                                <strong>{{ $errors->first('neighborhood') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('latitude') ? ' has-error' : '' }}">
                    <label for="latitude" class="col-md-12 control-label">latitude</label>

                    <div class="col-md-12">
                        <input id="latitude" type="text" class="form-control" name="latitude" value="{{ old('latitude') }}" required autofocus>

                        @if ($errors->has('latitude'))
                            <span class="help-block">
                                <strong>{{ $errors->first('latitude') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('longitude') ? ' has-error' : '' }}">
                    <label for="longitude" class="col-md-12 control-label">longitude</label>

                    <div class="col-md-12">
                        <input id="longitude" type="text" class="form-control" name="longitude" value="{{ old('longitude') }}" required autofocus>

                        @if ($errors->has('longitude'))
                            <span class="help-block">
                                <strong>{{ $errors->first('longitude') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                    <label for="photo" class="col-md-12 control-label">Upload file</label>

                    <div class="col-md-12 input-group ">
                        <input type="file" class="custom-file-input" name="photo" id="photo" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="photo">Choose file</label>
                        @if ($errors->has('photo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('photo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <input type="submit" name="submit" value="Register" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
@endsection
