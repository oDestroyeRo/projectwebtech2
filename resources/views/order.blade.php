
@extends('layouts.app')


@section('content')
    <div class="jumbotron">
        <div class="container">

            <h1 class="text-center">Your Order</h1>
        </div>
    </div>
    @foreach($data as $a)
    <div class="row">
      <div class="col-xs-6 col-md-4">
                <center> <p>id : {{$a->user_id}} </p> </center>
      </div>
    @endforeach
@endsection
