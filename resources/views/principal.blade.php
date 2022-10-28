@extends('plantilla')

@section('contenido')

    <div class="page-header">
        <h1 class="text-center">Biblioteca</h1>
    </div>
    
    <div id="carouselExampleDark" class="carousel carousel-dark slide mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000" style="text-align: center;">
            <img src="{{ URL::asset('img1.jpg')}} " class="img-fluid" style="width: 900px; height: 400px" alt="tech">
            <div class="carousel-caption d-none d-md-block text-white">
                <h5>Nuevos lanzamientos!</h5>
                <p>Descubre los nuevos lanzamientos sobre tecnologia.</p>
            </div>
            </div>
            <div class="carousel-item" data-bs-interval="10000" style="text-align: center;">
            <img src="{{URL::asset('img2.png')}}" class="d-block w-100" style="width: 700px; height: 400px" alt="stonks">
            <div class="carousel-caption d-none d-md-block  text-white">
                <h5>las peores ventas del 2022</h5>
                <p>aqui te mostraremos el listado de las peores ventas del 2022.</p>
            </div>
            </div>
            <div class="carousel-item" data-bs-interval="10000">
            <img src="{{URL::asset('img3.jpg')}}" class="d-block w-100" style="width: 500px; height: 400px" alt="time">
            <div class="carousel-caption d-none d-md-block  text-white">
                <h5>Capsula de tiempo</h5>
                <p>Estos son los titulos lanzados hace mas de 10 anios.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

@stop