
@extends('layouts.app')


@section('content')
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
    <div class="jumbotron">
        <div class="container">

            <h1 class="text-center">Your Order</h1>
        </div>
    </div>
    <center> <h2>id : {{ Auth::id()}} </h2> </center>

    <div class="row">
      <div class="col-xs-6 col-md-4">

      </div>
      <table style="width:100%">
    <tr>
      <th>Menu</th>
        <th>Size</th>
          <th>Type</th>
            <th>Price</th>
    </tr>
      <tr>
      @foreach($data as $a)
      <td>{{$a->product_name}}</td>
      <td>{{$a->size}}</td>
      <td>{{$a->type}}</td>
      <td>{{$a->price}}</td>
</tr>
  </table>
    @endforeach
@endsection
