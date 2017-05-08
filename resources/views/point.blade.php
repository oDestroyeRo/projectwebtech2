
@extends('layouts.app')


@section('content')
    <div class="jumbotron">
        <div class="container">

            <h1 class="text-center">Your Point</h1>

        </div>
    </div>
    @foreach($data as $a)
            <center>  <label class="text-center">Point : {{$a->point}} </label>
    @endforeach
@endsection
