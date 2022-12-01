<!-- Modal -->
<div class="modal fade" id="EliminarLibro{{$consulta->idLibro}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="EliminarLibro" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Desea eliminar el Libro?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="card mt-5 mb-5">
          <div class="card-header text-center fs-4 fw-bolder text-danger">
            {{$consulta->isbn}}
          </div>
          <div class="card-body">
            <h5 class="text-center">{{$consulta->titulo}}</h5>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <form action="{{route('libro.destroy',$consulta->idLibro) }}" method="POST">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger mx-2">Borrar</button>
        </form>
      </div>

    </div>
  </div>
</div>