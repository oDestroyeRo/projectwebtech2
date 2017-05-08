@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <a href='voucher/create' class="btn btn-success btn-sm pull-right">Add Voucher</a></div>

                <div class="panel-body" >
                  @foreach ($data as $d)
                  <form class="form-horizontal" role="form" method="get" action="voucher/{{ $d->voucher_id }}/destroy">
                      {{ csrf_field() }}
                    <div class="col-xs-6 col-md-6">
                      <div  class="thumbnail">
                        <h3>{{$d->voucher_point}} Point</h3>
                        <img src='{{ $d->voucher_img }}' alt="Sample Image">
                        <h3>{{$d->voucher_price}} Bath</h3>
                        <a class="btn btn-info btn-sm"  href='voucher/{{$d->voucher_id}}/edit'> Edit</a>
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
