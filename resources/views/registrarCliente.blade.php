@extends('plantilla')

@section('contenido')


@if (session('success'))
<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
  Cliente registrado correctamente!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<h1 class="text-center">Registro Cliente</h1>
<div class="container text-center mt-5">
    <form action="submitclient" method="post">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="{{old('txtNombre')}}">
                    <p class="text-danger fst-italic">{{ $errors->first('txtNombre') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label">INE</label>
                    <input type="text" class="form-control" id="txtINE" name="txtINE" value="{{old('txtINE')}}">
                    <p class="text-danger fst-italic">{{ $errors->first('txtINE') }}</p>
                </div>
            </div>

            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="txtApellido" name="txtApellido" value="{{old('txtApellido')}}">
                    <p class="text-danger fst-italic">{{ $errors->first('txtApellido') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email </label>
                    <input type="text" class="form-control" id="txtEmailCliente" name="txtEmailCliente" value="{{old('txtEmailCliente')}}">
                    <p class="text-danger fst-italic">{{ $errors->first('txtEmailCliente') }}</p>
                </div>
            </div>
        </div>

        <button type="submit" class="btn text-white" style="background-color: #21081a;">Submit</button>
    </form>
</div>
@stop