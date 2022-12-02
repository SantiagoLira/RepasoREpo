<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-compatible" content="ie+edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Biblioteca</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </head>
    <body class="antialiased p-3 mb-2 bg-dark text-white">
        
        <nav class="navbar navbar-dark bg-dark.bg-gradient">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Biblioteca</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link {{ request()->routeIs('main')?'active':'' }}" aria-current="page" href="{{ route('main') }}">Principal</a>
                    <a class="nav-link {{ request()->routeIs('libro.index')?'active':'' }}" aria-current="page" href="{{ route('libro.index') }}">Libros</a>
                    <a class="nav-link {{ request()->routeIs('clientes.index')?'active':'' }}" aria-current="page" href="{{ route('clientes.index') }}">Clientes</a>
                </div>
                </div>
            </div>
        </nav>

        @yield('contenido')

        <!--Pie de Pagina-->

        <footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
            
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                Biblioteca
                <p>@php
                    echo date("d-m-y");
                    @endphp
                </p>
            </div>
            <!-- Copyright -->
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
    </body>
</html>
