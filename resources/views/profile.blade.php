
@extends('layouts.app')


@section('content')
    <div class="jumbotron">
        <div class="container">

            <h1 class="text-center">Profile</h1>
        </div>
    </div>
  <!--   @foreach($data as $a)
    <div class="row">
      <div class="col-xs-6 col-md-4">
                <center> <p>id : {{$a->id}} </p> </center>
                <center><label>Firstname :  <input type='text' placeholder="{{$a->firstname}}"></label></center>
                <center> <label>Lastname : <input type='text' placeholder="{{$a->lastname}}"></label></center>
                <center> <label>Tel : <input type='text' placeholder="{{$a->tel}}"></label></center>
                <center> <label>Address : <input type='text' placeholder="{{$a->address}}"></label></center>
                <center> <label>Change password : <input type='password' ></input></label></center>
                <center><input type='submit' value='submit' onclick=></button></center>
      </div>
    @endforeach -->

    <form method="POST" action="">
  <input type="hidden" name="_token" value="">
  <input type="hidden" name="_method" value="PUT">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="" class="form-control">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" value="" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fa fa-btn fa-sign-in"></i>Update
  </button>
</form>

@endsection
