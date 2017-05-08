@extends('layouts.app')


@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="text-center">Gift Voucher</h1>
        </div>
    </div>
  @foreach($voucher as $v)
    <div class="row">


      <div class="col-xs-6 col-md-6">
          <center> <img src="/{{$v->voucher_img}}" alt="Sample Image"> </center>
          <center> <p> {{$v->voucher_point}} </p> </center>


      </div>

      @endforeach


@endsection
