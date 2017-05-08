@extends('layouts.app')

@section('content')
<!-- Button trigger modal -->
<div class="form-group">
  <a href="#" class="btn btn-success btn-lg btn-add" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Add Promotion</a>
</div>
<!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <br><br><br><br><br><br><br>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Promotion</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" action="{{ route('insert') }}"  role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="col-md-3 control-label">ID</label>
              <div class="col-md-8">
                <label class="form-control"><?php  $promotion_id = \App\Promotion::max('promotion_id'); echo $promotion_id+1; ?></label>
              </div>
            </div>


            <div class="form-group{{ $errors->has('promotionImg') ? ' has-error' : '' }}">
              <label for="promotionImg" class="col-md-3 control-label">BROWSE</label>
              <div class="col-md-8">
                <input type="file" class="form-control" name="promotionImg" id="promotionImg" placeholder="img" value="{{ old('promotionImg') }}" required autofocus>
                @if ($errors->has('promotionImg'))
                    <span class="help-block">
                        <strong>{{ $errors->first('promotionImg') }}</strong>
                    </span>
                @endif
              </div>
            </div>


            <div class="form-group{{ $errors->has('promotionDes') ? ' has-error' : '' }}">
              <label for="promotionDes" class="col-md-3 control-label">DESCRIPTION</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="promotionDes" id="promotionDes" placeholder="Description" value="{{ old('promotionDes') }}" required autofocus>
                @if ($errors->has('promotionDes'))
                    <span class="help-block">
                        <strong>{{ $errors->first('promotionDes') }}</strong>
                    </span>
                @endif
              </div>
            </div>


            <div class="form-group{{ $errors->has('promotionDis') ? ' has-error' : '' }}">
              <label for="promotionDis" class="col-md-3 control-label">DISCOUNT</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="promotionDis" id="promotionDis" placeholder="Discount" value="{{ old('promotionDis') }}" required autofocus>
                @if ($errors->has('promotionDis'))
                    <span class="help-block">
                        <strong>{{ $errors->first('promotionDis') }}</strong>
                    </span>
                @endif
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


      <br><br>
      <div class="panel panel-body">
        <?php $count=0; ?>
        @foreach($promotions as $promotion)
        <!-- ROW-1 -->
        <!-- <div class="row"> -->
          <!-- COL-1 -->
          <?php if ($count%3 == 0): ?>
            <div class="row">
          <?php endif; ?>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail item-container">
              <img class="item-image" src="{{ URL::to($promotion->promotion_img) }}" alt="..." >
              <div class="caption item-detail">
                <h3>Discount {{ $promotion->discount }} %</h3>
                <p>{{ $promotion->description }}</p>
                <p><a href="{{ url('promotion/edit/'.$promotion->promotion_id) }}" class="btn btn-warning btn-sm" role="button"><span class="glyphicon glyphicon-edit"></span>Edit</a>
                  <a href="{{ url('promotion/delete/'.$promotion->promotion_id) }}" class="btn btn-danger btn-sm" role="button"><span class="glyphicon glyphicon-remove"></span>Delete</a></p>
              </div>
            </div>
          </div>
          <?php $count++; ?>
          <?php if ($count%3 == 0): ?>
            </div>
          <?php endif; ?>
        <!-- </div> -->
      @endforeach
    </div>
    <br>
      <div class="text-center">
        {!! $promotions->links(); !!}
      </div>

@endsection
