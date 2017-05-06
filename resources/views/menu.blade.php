@extends('layouts.app')


@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="text-center">The Wongklom Singer</h1>
        </div>
    </div>
    @foreach($data as $a)
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img src="/{{$a->product_img}}" alt="Sample Image">
        </a>
      </div>
    @endforeach
@endsection
