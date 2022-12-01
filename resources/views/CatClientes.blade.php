@extends('Plantilla')

@section('contenido')

@include('ModalIngresarCliente')
@if (session()->has('edicion'))
{!! "<script>
    Swal.fire(
        'Correcto!',
        'Cliente Actualizado!',
        'success'
    )
</script>" !!}

@endif
@if (session()->has('eliminacion'))
{!! "<script>
    Swal.fire(
        'Correcto!',
        'Cliente Eliminado!',
        'success'
    )
</script>" !!}

@endif
@if (session()->has('exito'))
{!! "<script>
    Swal.fire(
        'Correcto!',
        'Cliente registrado!',
        'success'
    )
</script>" !!}

@endif

<h1 class="text-center">Clientes</h1>

<div class="text-center my-2">
    <a type="button" class="btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#ModalIngresar">
        <i class="bi bi-upload"></i>Ingresar Recuerdo
    </a>
</div>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Ine</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($resultclientes as $consulta)
        @include('ModalEditarCliente')
        @include('ModalEliminarCliente')
        <tr>
            <th scope="row">{{$consulta->idCliente}}</th>
            <td>{{$consulta->nombre}}</td>
            <td>{{$consulta->apellido}}</td>
            <td>{{$consulta->ine}}</td>
            <td>{{$consulta->email}}</td>
            <td>
                
                <a type="button" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#ModalActualizar{{$consulta->idCliente}}">
                    <i class="bi bi-pencil"></i>Editar
                </a>

                <a type="button" class="btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#ModalEliminar{{$consulta->idCliente}}">
                    <i class="bi bi-trash3"></i>Eliminar
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop