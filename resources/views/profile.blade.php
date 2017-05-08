
@extends('layouts.app')


@section('content')
    <div class="jumbotron">
        <div class="container">

            <h1 class="text-center">Profile</h1>
        </div>
    </div>
    <form class="form-horizontal" role="form" method="post" action="{{ route('profile.update',Auth::user()->id) }}">
        {{ csrf_field() }}
    @foreach($data as $a)
    <div class="row">
      <div class="col-xs-6 col-md-4">
                <center> <p>id : {{$a->id}} </p> </center>
                <center><label>Firstname :  <input id='firstname' name='firstname' type='text' value="{{$a->firstname}}"></label></center>
                <center> <label>Lastname : <input id='lastname' name='lastname'  type='text' value="{{$a->lastname}}"></label></center>
                <center> <label>Tel : <input id='tel' name='tel'  type='text' value="{{$a->tel}}"></label></center>
                <center> <label>Address : <input id='address' name='address'  type='text' value="{{$a->address}}"></label></center>
                <center> <label>Change password : <input id='pass' name='pass' type='password' ></input></label></center>
                <center><input type='submit' value='submit'></button></center>
      </div>
    @endforeach
  </form>

    <!-- <form method="POST" action="">
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
</form> -->

@endsection
