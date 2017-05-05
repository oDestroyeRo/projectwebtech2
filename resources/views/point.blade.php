@extends('layouts.app')
@section('content')
  
    <div class="jumbotron">
        <div class="container">
            <h1 class="text-center">The Wongklom Singer</h1>  
        </div>
    </div>
  <div class="form-group row">
    <label for="point" class="col-sm-5 col-form-label" p align = "right">Your point :</label>
    <div class="col-sm-3">
      <input type="point" class="form-control" id="yourPoint" placeholder="Your point">
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-4">
      <img id="image" src="img/personFemale.png" class="img-thumbnail" alt="picture" width="204" height="136" p align = "right">
    </div>
    <div class="col-sm-4">
      <center><p>500 point free Caffè Americano</p>
      <button type="button" class="btn btn-success">Submit</button></center>
    </div>
    
    <div class="col-sm-4">
      
    </div>
  </div>
@endsection