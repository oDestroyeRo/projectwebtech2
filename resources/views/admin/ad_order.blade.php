@extends('layouts.app')

@section('content')
    <center><h1>Test Order</h1></center>
    <div class="container">
      <form class="form-inline">
        <div class="col-md-10">
          <input type="text" class="form-control" id="orderID" placeholder="Find By Order ID" style="width:100%;">
        </div>
        <div class="col-md-2">
          <button type="button" class="btn btn-info form-control" id="btnOrder" name="btnOrder" onclick="getDateOrder()" style="width:100%;">FIND</button>
        </div>
      </form>
    </div>

    <br><br>
    <div class="panel panel-body">
      <?php $count=0; ?>
      @foreach($orders as $order)
      <!-- ROW-1 -->
      <!-- <div class="row"> -->
        <!-- COL-1 -->
        <?php if ($count%3 == 0): ?>
          <div class="row">
        <?php endif; ?>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail item-container">
            <img class="item-image" src="{{ URL::to($order->product_img) }}" alt="..." >
            <div class="caption item-detail">
              <h3> {{ $order->product_name }} </h3>
              <p>{{ $order->amount }}</p>
            </div>
          </div>
        </div>
        <?php $count++; ?>
        <?php if ($count%3 == 0): ?>
        </div><br>
        <?php endif; ?>
      <!-- </div> -->
    @endforeach
  </div>
  <div class="text-center">
    {!! $orders->links(); !!}
  </div>
@endsection

@section('script')
<script>
  function getDateOrder(){
    var url = '{{ URL::to('/order') }}';
    console.log(url);
    var id = $('#orderID').val();
    var find = url+'/'+id;
    window.location.replace(find);
    $('#orderID').val('');
  }
</script>
@endsection
