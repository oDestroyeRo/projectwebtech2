@extends('layouts.app')

@section('content')

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid w-100" src="img/slide-1.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-shadow"></h3>
                            <p class="text-shadow"></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid w-100" src="img/slide-2.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-shadow"></h3>
                            <p class="text-shadow"></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid w-100" src="img/slide-3.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-shadow"></h3>
                            <p class="text-shadow"></p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

@endsection
