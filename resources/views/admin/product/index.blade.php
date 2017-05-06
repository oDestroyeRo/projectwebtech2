@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <a href='product/create' class="btn btn-success btn-sm pull-right">Add Product</a></div>

                <div class="panel-body" >
                  @foreach ($data as $d)
                  <div class="col-xs-6 col-md-3">
                    <div  class="thumbnail">
                      <img src='{{ $d->product_img }}' alt="Sample Image">
                      <a class="btn btn-info btn-sm"  > Edit</a>
                      <a  class="btn btn-danger btn-sm" > Delete</a>
                    </div>
                  </div>
                  @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
