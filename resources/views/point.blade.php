
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
              <table  id="table" style="width:100%;">
                <tr>
                  <th><h3>Points</h3></th>
                  <th><h3>Description</h3></th>
                  <th><h3>Exchange</h3></th>
                </tr>
                <tr>
                  <td><h3>100 points</h3></td>
                  <td><h3>hot amaricano (size s)</h3></td>
                  <td><button type="submit" id='table1'>print</button></td>
                </tr>
                <tr>
                  <td><h3>200 points</h3></td>
                  <td><h3>every coffee (size m)</h3></td>
                  <td><button type="button" name="button" >print</button></td>
                </tr>
                <tr>
                  <td><h3>500 points</h3></td>
                  <td><h3>coupon 200 baht</h3></td>
                  <td><button type="button" name="button" >print</button></td>
                </tr>
              </table>
            </div>
        </div>
</form>
    </div>
@endsection
<!-- @section('script')
<script>
  $(document).ready(function() {
    $('#table1').DataTable( {
        buttons: [
            {
                extend: 'pdf',
                text: 'Save current page',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    }
                }
            }
        ]
    } );

    $('#reportDate').datepicker({
      orientation: "bottom auto",
      todayHighlight: true,
    });
  });

  function getDate(){
    var url = '{{ URL::to('/admin/report') }}';
    console.log(url);
    var date = $('#reportDate').val();
    var res = date.split("/");
    var find = url+'/'+res[2]+'-'+res[0]+'-'+res[1];

    window.location.replace(find);
  }
</script>

<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>

<script src="{{ asset('datepicker/bootstrap-datepicker.js') }}"></script>

@endsection -->
