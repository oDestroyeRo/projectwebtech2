@extends('layouts.app')

@section('content')

    <div class="jumbotron">
        <div class="container">
            <h1 class="text-center">Our Promotions</h1>
        </div>
    </div>

    @foreach( $promotion as $p)




    <div class="row">
      <div class="col-xs-6 col-md-6 ">
        <!-- <a href="#" class="thumbnail"> -->
          <center> <img src="/{{ $p->promotion_img}}" alt="Sample Image"> </center>
          <br>
          <center> <p> {{$p->description}} </p> </center>

        <!-- </a> -->
      </div>

    </div>
      @endforeach
@endsection
