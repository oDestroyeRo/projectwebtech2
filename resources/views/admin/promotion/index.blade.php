@extends('layouts.app')

@section('content')
      @include('admin.promotion.create')
      <br><br>
      <div class="panel panel-body">
        @foreach($promotions as $promotion)
        <!-- ROW-1 -->
        <!-- <div class="row"> -->
          <!-- COL-1 -->
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="{{ URL::to($promotion->promotion_img) }}" alt="..." style="width:364px; height:365px; ">
              <div class="caption">
                <h3>Discount {{ $promotion->discount }}</h3>
                <p>{{ $promotion->description }}</p>
                <p><a href="{{ url('promotion/edit/'.$promotion->promotion_id) }}" class="btn btn-warning btn-sm" role="button"><span class="glyphicon glyphicon-edit"></span>Edit</a>
                  <a href="{{ url('promotion/delete/'.$promotion->promotion_id) }}" class="btn btn-danger btn-sm" role="button"><span class="glyphicon glyphicon-remove"></span>Delete</a></p>
              </div>
            </div>
          </div>
        <!-- </div> -->
      @endforeach
    </div>
      <div class="text-center">
        {!! $promotions->links(); !!}
      </div>

@endsection
