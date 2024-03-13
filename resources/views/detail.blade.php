@extends('layout.app')

@section('content')
    <h1 class="text-center m-5">Detalle producto</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img class="img-fluid" src="{{asset('img/producto-ejemplo.png')}}" alt="">
            </div>

            <div class="col-md-4">
                <h1>Gato</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem consectetur repudiandae ut molestiae sint itaque assumenda officia non alias nisi reiciendis eveniet laborum, praesentium pariatur numquam commodi. Officiis, repellendus rerum.</p>
                <h3>$500000</h3>
                <button type="button" class="btn btn-primary">Añadir al carrito</button>
            </div>
        </div>
    </div>
    @endsection
