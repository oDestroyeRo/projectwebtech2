@extends('layouts.app')

@section('content')
    <center><h1>Report Order</h1></center>
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <input type="text" class="form-control" id="reportDate" placeholder="Date" onchange="getDate()">
        </div>
      </div>
      <br><br>
      <table id="table" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                <th> Product </th>
                <th> Type </th>
                <th> Size </th>
                <th> Price </th>
                <th> Amount </th>
              </tr>
          </thead>
          <tbody>
            @foreach($reports as $report)
              <tr>
                <th> {{ $report->product_name }} </th>
                <th> {{ $report->type }} </th>
                <th> {{ $report->size }} </th>
                <th> {{ $report->price }} </th>
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
            'csv', 'excel', 'pdf','print'
        ]
    });

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

@endsection
