
@extends('layouts.app')


@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="text-center">Your Points</h1>
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
            <h1 class="text-center">Gift Voucherss</h1>
            <div>
              <table style="width:100%;">
                <tr>
                  <th>Points</th>
                  <th>Description</th>
                  <th>Exchange</th>
                </tr>
                <tr>
                  <td>100 points</td>
                  <td>hot amaricano (size s)</td>
                  <td><button type="submit" >print</button></td>
                </tr>
                <tr>
                  <td>200 points</td>
                  <td>every coffee (size m)</td>
                  <td><button type="button" name="button" >print</button></td>
                </tr>
                <tr>
                  <td>500 points</td>
                  <td>coupon 200 baht</td>
                  <td><button type="button" name="button" >print</button></td>
                </tr>
              </table>
            </div>
        </div>
</form>
    </div>
@endsection
