
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
      <table style="width:100%">
    <caption>Total price : {{$a->total_price}}</caption>
    <tr>
      <th>Menu</th>
        <th>Size</th>
          <th>Type</th>
            <th>Price</th>
    </tr>
                      <td>{{$a->product_name}}</td>
      <td>{{$a->size}}</td>
      <td>{{$a->type}}</td>
      <td>{{$a->price}}</td>

  </table>
    @endforeach
@endsection
