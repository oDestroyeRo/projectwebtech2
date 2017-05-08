
@extends('layouts.app')


@section('content')
    <div class="jumbotron">
        <div class="container">

            <h1 class="text-center">Your Order</h1>
        </div>
        <h2>id : {{ Auth::id()}} </h2>
    </div>
    <style>
      table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
      }
      th, td {
          padding: 5px;
      }
      th,tr {
          text-align: center;
      }
    </style>

    <div class="row">
      <div class="col-xs-6 col-md-4">

      </div>
      <table style="width:100%">
    <tr>
      <th><h3>Menu</h3></th>
      <th><h3>Size</h3></th>
      <th><h3>Type</h3></th>
      <th><h3>Price</h3></th>
    </tr>
      @foreach($data as $a)
      <tr>

      <td><h3>{{$a->product_name}}</h3></td>
      <td><h3>{{$a->size}}</h3></td>
      <td><h3>{{$a->type}}</h3></td>
      <td><h3>{{$a->price}}</h3></td>
</tr>
    @endforeach
  </table>

@endsection
