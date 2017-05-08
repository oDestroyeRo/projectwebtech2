@extends('layouts.app')


@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="text-center">Gift Voucher</h1>
        </div>
    </div>
  @foreach($voucher as $v)
    <div class="row">
      <div class="col-xs-6 col-md-6">
          <table>
            <thead>
              <tr>
                <th><img src="/{{$v->voucher_img}}" alt="Sample Image" width="612" height="205"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><h2>{{$v->voucher_point}} points to exchange a gift voucher price {{$v->voucher_price}} baht.</h2></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      @endforeach


@endsection
