
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
              <table id="mytable" style="width:100%;">
                <tr>
                  <th><h3>Points</h3></th>
                  <th><h3>Description</h3></th>
                  <th><h3>Exchange</h3></th>
                </tr>
                <tr>
                  <td><h3>100 points</h3></td>
                  <td><h3>hot amaricano (size s)</h3></td>
                  <td><button type="button" id="print">print</button></td>
                </tr>
                <tr>
                  <td><h3 id = 'p200'>200 points</h3></td>
                  <td><h3>every coffee (size m)</h3></td>
                  <td><button type="submit" name="button" >print</button></td>
                </tr>
                <tr>
                  <td><h3>500 points</h3></td>
                  <td><h3>coupon 200 baht</h3></td>
                  <td><button type="button" name="button" >print</button></td>
                </tr>
              </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
  <script type="text/javascript">
    $(document).ready(function(e){
      $('#print').click(function(e){
        $('#mytable').tableExport({
          type:'pdf',
          escape:false
        });
      });
    });
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="tableExport/tableExport.js"></script>
  <script type="text/javascript" src="tableExport/jquery.base64.js"></script>

  <script type="text/javascript" src="tableExport/jspdf/jspdf.js"></script>
  <script type="text/javascript" src="tableExport/jspdf/libs/sprintf.js"></script>
  <script type="text/javascript" src="tableExport/jspdf/libs/base64.js"></script>
@endsection
