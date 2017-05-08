@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Size <a href='productdetail/createsize' class="btn btn-success btn-sm pull-right">Add Size</a></div>

                <div class="panel-body" >
                  <table class="table">
                      <thead>
                          <tr>
                              <th>Size</th>
                              <th>Price</th>
                          </tr>
                      </thead>
                      <tbody>

                          @foreach ($productsize as $d)
                          <form class="form-horizontal" role="form" method="post" action="productdetail/{{ $d->size }}/destroysize">
                              {{ csrf_field() }}
                          <tr>
                              <td>{{ $d->size }}</td>
                              <td>{{ $d->size_price }}</td>
                            <td><button class="btn btn-danger btn-sm pull-right" type="submit" onclick="return confirm('Are you sure?')"> Delete</button><a class="btn btn-info btn-sm pull-right" href="productdetail/{{$d->size}}/editsize">Edit</a></td>
                          </tr>
                          <form>
                          @endforeach
                      </tbody>
                  </table>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Type <a href='productdetail/createtype' class="btn btn-success btn-sm pull-right">Add Type</a></div>

                <div class="panel-body" >
                  <table class="table">
                      <thead>
                          <tr>
                              <th>Type</th>
                              <th>Price</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($producttype as $d)
                          <form class="form-horizontal" role="form" method="post" action="productdetail/{{ $d->type }}/destroytype">
                            {{ csrf_field() }}
                          <tr>
                              <td>{{ $d->type }}</td>
                              <td>{{ $d->type_price }}</td>
                              <td><button class="btn btn-danger btn-sm pull-right" type="submit" onclick="return confirm('Are you sure?')"> Delete</button><a class="btn btn-info btn-sm pull-right" href="productdetail/{{$d->type}}/edittype">Edit</a></td>
                          </tr>
                          <form>
                          @endforeach
                      </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
@endsection
