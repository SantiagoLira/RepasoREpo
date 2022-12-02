@extends('Plantilla')

@section('contenido')

@include('ModalIngresarLibro')
@if (session('edicion'))
<script>
    Swal.fire({
        position: 'top',
        icon: 'success',
        text: 'EL libro {{session('
        edicion ')['
        data ']}} ha sido Actualizado',
        showConfirmButton: false,
        timer: 1500
    })
</script>

@endif
@if (session()->has('libroEliminado'))
{!! "<script>
    Swal.fire(
        'Correcto!',
        'Libro Eliminado!',
        'success'
    )
</script>" !!}

@endif
@if (session('exito'))
<script>
    Swal.fire({
        position: 'top',
        icon: 'success',
        text: 'EL libro {{session('
        exito ')['
        data ']}} ha sido Registrado',
        showConfirmButton: false,
        timer: 1500
    })
</script>

@endif

<h1 class="text-center">Libros</h1>

<div class="text-center my-2">
    <a type="button" class="btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#ModalIngresar">
        <i class="bi bi-upload"></i>Ingresar Libro
    </a>
</div>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">ISBN</th>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Paginas</th>
            <th scope="col">Editorial</th>
            <th scope="col">Email</th>
            <th scope="col">funciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($resultLibros as $consulta)
        @include('ModalDeleteLibro')

        @include('ModalEditarLibro')

        <tr>
            <th scope="row">{{$consulta->isbn}}</th>
            <td>{{$consulta->titulo}}</td>
            <td>{{$consulta->autor}}</td>
            <td>{{$consulta->paginas}}</td>
            <td>{{$consulta->editorial}}</td>
            <td>{{$consulta->email}}</td>
            <td>
                <a type="button" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#ModalActualizar{{$consulta->idLibro}}">
                    <i class="bi bi-pencil"></i>Editar
                </a>


                <a type="button" class="btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#ModalEliminar{{$consulta->idLibro}}">
                    <i class="bi bi-trash3"></i>eliminar
                </a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@stop