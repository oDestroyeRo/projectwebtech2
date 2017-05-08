@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Voucher</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('voucher.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="id" class="col-md-4 control-label">ID</label>

                            <div class="col-md-6">
                                  <label for="id" class="col-md-4 control-label"><?php  $id = \App\voucher::max('voucher_id'); echo $id+1; ?></label>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('point') ? ' has-error' : '' }}">
                            <label for="point" class="col-md-4 control-label">Point</label>

                            <div class="col-md-6">
                                <input id="point" type="text" class="form-control" name="point" value="{{ old('point') }}" required autofocus>

                                @if ($errors->has('point'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('point') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" required>

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}" id="vue-img" >
                            <label for="price" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="image" value="{{ old('image') }}" required>

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
