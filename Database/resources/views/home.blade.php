@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                        Home
                </div>

            </div>
        </div>
    </div>

    <br>
    <a href="{{ URL::to('logout') }}">Logout</a>
</div>
@endsection
