@extends('layouts.app')

@section('content')
<!-- Button trigger modal -->
<div class="form-group">
  <a href="#" class="btn btn-success btn-lg btn-add" data-toggle="modal" data-target="#insertModal"><span class="glyphicon glyphicon-plus"></span> Add Promotion</a>
</div>

<!-- MODAL ADD PROMOTION-->
  <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <br><br><br><br><br><br><br>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Add Promotion</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" id="insertForm" method="post" action="{{ route('insert') }}"  role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="col-md-3 control-label">ID</label>
              <div class="col-md-8">
                <label class="form-control" id="insertID" name="insertID" value="{{ old('insertID') }}"><?php  $promotion_id = \App\Promotion::max('promotion_id'); echo $promotion_id+1; ?></label>
              </div>
            </div>


            <div class="form-group{{ $errors->has('insertImg') ? ' has-error' : '' }}">
              <label for="insertImg" class="col-md-3 control-label">BROWSE</label>
              <div class="col-md-8">
                <input type="file" class="form-control" name="insertImg" id="insertImg" placeholder="img" value="{{ old('insertImg') }}" required autofocus>
                @if ($errors->has('insertImg'))
                    <span class="help-block">
                        <strong>{{ $errors->first('insertImg') }}</strong>
                    </span>
                @endif
              </div>
            </div>


            <div class="form-group{{ $errors->has('insertDescription') ? ' has-error' : '' }}">
              <label for="insertDescription" class="col-md-3 control-label">DESCRIPTION</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="insertDescription" id="insertDescription" placeholder="Description" value="{{ old('insertDescription') }}" required autofocus>
                @if ($errors->has('insertDescription'))
                    <span class="help-block">
                        <strong>{{ $errors->first('insertDescription') }}</strong>
                    </span>
                @endif
              </div>
            </div>


            <div class="form-group{{ $errors->has('insertDiscount') ? ' has-error' : '' }}">
              <label for="insertDiscount" class="col-md-3 control-label">DISCOUNT</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="insertDiscount" id="insertDiscount" placeholder="Discount" value="{{ old('insertDiscount') }}" required autofocus>
                @if ($errors->has('insertDiscount'))
                    <span class="help-block">
                        <strong>{{ $errors->first('insertDiscount') }}</strong>
                    </span>
                @endif
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" >Add</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div><!-- MODAL ADD PROMOTION-->




  <!-- MODAL EDIT PROMOTION-->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit Promotion</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" id="editForm" method="post" action="{{ route('update') }}"  role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="col-md-3 control-label">ID</label>
              <div class="col-md-8">
                <label class="form-control" id="editID" name="editID" value="{{ old('editID') }}"></label>
                <input type="hidden" id="editInID" name="editInID" value="{{ old('editInID') }}">
              </div>
            </div>


            <div class="form-group{{ $errors->has('editImg') ? ' has-error' : '' }}">
              <label for="editImg" class="col-md-3 control-label">BROWSE</label>
              <div class="col-md-8">
                <input type="file" class="form-control" name="editImg" id="editImg" placeholder="img" value="{{ old('editImg') }}" >
                @if ($errors->has('editImg'))
                    <span class="help-block">
                        <strong>{{ $errors->first('editImg') }}</strong>
                    </span>
                @endif
              </div>
            </div>


            <div class="form-group{{ $errors->has('editDescription') ? ' has-error' : '' }}">
              <label for="editDescription" class="col-md-3 control-label">DESCRIPTION</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="editDescription" id="editDescription" placeholder="Description" value="{{ old('editDescription') }}" required autofocus>
                @if ($errors->has('editDescription'))
                    <span class="help-block">
                        <strong>{{ $errors->first('editDescription') }}</strong>
                    </span>
                @endif
              </div>
            </div>


            <div class="form-group{{ $errors->has('editDiscount') ? ' has-error' : '' }}">
              <label for="editDiscount" class="col-md-3 control-label">DISCOUNT</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="editDiscount" id="editDiscount" placeholder="Discount" value="{{ old('editDiscount') }}" required autofocus>
                @if ($errors->has('editDiscount'))
                    <span class="help-block">
                        <strong>{{ $errors->first('editDiscount') }}</strong>
                    </span>
                @endif
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save change</button>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- MODAL EDIT PROMOTION-->

<!-- MODAL DELETE PROMOTION-->
  <div class="modal fade" tabindex="-1" role="dialog" id="deleteModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete Promotion</h4>
      </div>
      <div class="modal-body">
        <h3>Do you want to delete?</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="btnDelete" name="btnDelete" onclick="confirm()">Delete</button>
      </div>
    </div>
  </div>
</div><!-- MODAL DELETE PROMOTION-->


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
              <img class="item-image" src="{{ URL::to($promotion->promotion_img) }}" alt="..." style="width:300px; height:300px;">
              <div class="caption item-detail">
                <h3>Discount {{ $promotion->discount }} %</h3>
                <h4>{{ $promotion->description }}</h4>
                <p><a onclick="editPromotion({{ $promotion->promotion_id }})" class="btn btn-warning btn-sm" role="button" data-toggle="modal" data-target="#editModal">Edit</a>
                  <!-- <a href="{{ url('promotion/delete/'.$promotion->promotion_id) }}" class="btn btn-danger btn-sm" role="button">Delete</a></p> -->
                  <a onclick="deletePro({{ $promotion->promotion_id }})" class="btn btn-danger btn-sm" role="button" data-toggle="modal" data-target="#deleteModal">Delete</a></p>
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

@section('script')
<script>
  function deletePro(id){
    var url = '{{ url('/admin/promotion/delete/') }}';
    $('#btnDelete').val(url+'/'+id);
    console.log($('#btnDelete').val());
  };

  function confirm(){
    var url = $('#btnDelete').val();
    window.location.replace(url);
  };

  function editPromotion(id){
    $.ajax({
      url: '{{ route('edit') }}',
      type: 'post',
      data: {
        'id' : id
      },
      success:function(data){
        console.log(data)
        console.log(data.promotions[0].promotion_id);

        $('#editID').text(data.promotions[0].promotion_id);
        $('#editID').val(data.promotions[0].promotion_id);

        $('#editInID').val(data.promotions[0].promotion_id);
        $('#editDescription').val(data.promotions[0].description);
        $('#editDiscount').val(data.promotions[0].discount);
      }
    });
  };

  $(document).ready(function(){
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    });
</script>
@endsection
