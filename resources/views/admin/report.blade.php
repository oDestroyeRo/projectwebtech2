@extends('layouts.app')

@section('content')
    <h1>Test Report</h1>
    <div class="container">

      <center><div class="col-md-6">
        <input type="text" class="form-control" id="reportDate" placeholder="Date" onchange="getDate()">
      </div></center>
      <br><br>
      <table id="table" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th >Product </th>
                  <th> Price </th>
                  <th> Amount </th>
              </tr>
          </thead>
          <tbody>
            @foreach($reports as $report)
              <tr>
                  <th> {{ $report->product_name }} </th>
                  <th> {{ $report->product_price }} </th>
                  <th> {{ $report->amount }} </th>
              </tr>
              @endforeach
          </tbody>
        </table>
    </div>
@endsection

@section('script')
<script>
  $(document).ready(function() {
    $('#table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'csv', 'excel', 'pdf'
        ]
    });

    $('#reportDate').datepicker({
      orientation: "bottom auto",
      todayHighlight: true,
    });
  });

  function getDate(){
    var date = $('#reportDate').val();
    var res = date.split("/");
    var d = 'date='+res[0]+res[1]+res[2];
    console.log(date);
    $.ajax({
          url: '{{ route('report2') }}',
          type: 'post',
          data: d,
          success:function(data){
            console.log('success');
          }
    });
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

@endsection
