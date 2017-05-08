
@extends('layouts.app')


@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="text-center">Your Point</h1>
        </div>
    </div>
    @foreach($data as $a)
            <h1 class="text-center">{{$a->point}}</h1>
    @endforeach
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
            <h1 class="text-center">Gift Voucher</h1>
            <div>
              <table style="width:100%;">
                <tr>
                  <th>Points</th>
                  <th>Description</th>
                  <th>Exchange</th>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td><button type="button" name="button">exchange</button></td>
                </tr>
                <tr>
                  <td>100 points</td>
                  <td>hot amaricano (size s)</td>
                  <td><button type="button" name="button">exchange</button></td>
                </tr>
                <tr>
                  <td>100 points</td>
                  <td>hot amaricano (size s)</td>
                  <td><button type="button" name="button">exchange</button></td>
                </tr>
              </table>
            </div>
        </div>
    </div>
@endsection
