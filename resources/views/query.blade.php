@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h2>HTML Forms</h2>

                    <form action="" method="post">
                        {{ csrf_field() }}
                      First name:<br>
                      <input type="text" name="firstname" value="Mickey">
                      <br>
                      Last name:<br>
                      <input type="text" name="lastname" value="Mouse">
                      <br><br>
                      <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
