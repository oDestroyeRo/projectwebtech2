@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <a href='product/create' class="btn btn-success btn-sm pull-right">Add Product</a><a class="btn btn-info btn-sm pull-right" href="/productdetail">ProductDetail</a></div>

                <div class="panel-body" >
                  @foreach ($data as $d)
                  <form class="form-horizontal" role="form" method="post" action="product/{{ $d->product_id }}/destroy">
                      {{ csrf_field() }}
                    <div class="col-xs-6 col-md-3">
                      <div  class="thumbnail">
                        <h3>{{$d->product_name}}</h3>
                        <img src='{{ $d->product_img }}' alt="Sample Image">
                        <h3>{{$d->product_price}} Bath</h3>
                        <a class="btn btn-info btn-sm"  href='product/{{$d->product_id}}/edit'> Edit</a>
                        <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure?')"> Delete</button>
                      </div>
                    </div>
                </form>
                  @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
