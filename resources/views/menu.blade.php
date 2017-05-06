
@extends('layouts.app')


@section('content')
    <div class="jumbotron">
        <div class="container">

            <h1 class="text-center">All Menu</h1>
        </div>
    </div>
    @foreach($data as $a)
    <div class="row">


      <div class="col-xs-6 col-md-4">
        <!-- <a href="#" class="thumbnail"> -->
          <center> <img src="/{{$a->product_img}}" alt="Sample Image"> </center>
          <center> <p> {{$a->product_name}} </p> </center>

        <!-- </a> -->
      </div>

      <!-- {{$a->product_name}} -->
    @endforeach
@endsection
