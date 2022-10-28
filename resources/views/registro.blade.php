@extends('plantilla')

@section('contenido')

@if (session('exito'))
<script>
  Swal.fire({
    position: 'top',
    icon: 'success',
    text: 'EL libro {{session('exito')['data']}} ha sido Registrado',
    showConfirmButton: false,
    timer: 1500
  })
</script>

@endif

@if($errors->any())
@foreach ($errors->all() as $error)
@endforeach
@endif

<h1 class="text-center">Registro</h1>
<div class="container text-center mt-5">
  <form action="submitRegistrer" method="post">
    @csrf
    <div class="row">
      <div class="col-6">

        <div class="mb-3">
          <label class="form-label">ISBN</label>
          <input type="text" class="form-control" id="txtISBN" name="txtISBN" value="{{ old('txtISBN')}}">
          <p class="text-danger fst-italic">{{ $errors->first('txtISBN') }}</p>
        </div>
        <div class="mb-3">
          <label class="form-label">Autor</label>
          <input type="text" class="form-control" id="txtAutor" name="txtAutor" value="{{ old('txtAutor')}}">
          <p class="text-danger fst-italic">{{ $errors->first('txtAutor') }}</p>
        </div>
        <div class="mb-3">
          <label class="form-label">Editorial</label>
          <input type="text" class="form-control" id="txtEditorial" name="txtEditorial" value="{{ old('txtEditorial')}}">
          <p class="text-danger fst-italic">{{ $errors->first('txtEditorial') }}</p>
        </div>
      </div>

      <div class="col-6">
        <div class="mb-3">
          <label class="form-label">Titulo</label>
          <input type="text" class="form-control" id="txtTitulo" name="txtTitulo" value="{{ old('txtTitulo')}}">
          <p class="text-danger fst-italic">{{ $errors->first('txtTitulo') }}</p>

        </div>
        <div class="mb-3">
          <label class="form-label">Paginas</label>
          <input type="text" class="form-control" id="txtPaginas" name="txtPaginas" value="{{ old('txtPaginas')}}">
          <p class="text-danger fst-italic">{{ $errors->first('txtPaginas') }}</p>
        </div>
        <div class="mb-3">
          <label class="form-label">Email de editorial</label>
          <input type="text" class="form-control" id="txtEmailEditorial" name="txtEmailEditorial" value="{{ old('txtEmailEditorial')}}">
          <p class="text-danger fst-italic">{{ $errors->first('txtEmailEditorial') }}</p>
        </div>
      </div>
    </div>

    <button type="submit" class="btn text-white" style="background-color: #21081a;">Submit</button>
  </form>
</div>


@stop