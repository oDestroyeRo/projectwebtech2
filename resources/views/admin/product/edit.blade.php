@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Product</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="{{ route('product.update',$data->product_id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="id" class="col-md-4 control-label">ID</label>

                            <div class="col-md-6">
                                  <label for="id" class="col-md-4 control-label">{{ $data->product_id }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <label id="name"  class="form-control" name="name" > {{ $data->product_name }} </label>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="{{ $data->product_price }}" required>

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <!-- <div class="form-group{{ $errors->has('image_edit') ? ' has-error' : '' }}" id="vue-img" >
                            <label for="image_edit" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">
                                <input id="image_edit" type="file" class="form-control" name="image_edit" value="{{ $data->product_img }}">

                                @if ($errors->has('image_edit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image_edit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->

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
