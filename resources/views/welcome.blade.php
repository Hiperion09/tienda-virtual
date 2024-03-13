@extends('layout.app')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/slider-1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/slider-2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/slider-3.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <h1 class="text-center m-5">Productos</h1>
    <div class="container text-center">
        <div class="row">

            <div class="col-md-3 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/producto-ejemplo.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gato</h5>
                        <p class="card-text">$500000</p>
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5 mr-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/producto-ejemplo.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gato</h5>
                        <p class="card-text">$500000</p>
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5 mr-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/producto-ejemplo.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gato</h5>
                        <p class="card-text">$500000</p>
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5 mr-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/producto-ejemplo.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gato</h5>
                        <p class="card-text">$500000</p>
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5 mr-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/producto-ejemplo.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gato</h5>
                        <p class="card-text">$500000</p>
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
