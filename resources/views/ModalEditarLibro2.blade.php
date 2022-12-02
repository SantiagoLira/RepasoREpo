<!-- Modal -->
<div class="modal fade" id="ModalActualizar2{{$consulta->idLibro}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalActualizar" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Libro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <div class="card-body">
                    <form method="post" action="{{route('libro.update',$consulta->idLibro)}}">
                        @csrf
                        {!!method_field('PUT')!!}
                        <div class="row">
                            <div class="col-6">

                                <div class="mb-3">
                                    <label class="form-label">ISBN</label>
                                    <input type="text" class="form-control" id="txtISBN" name="txtISBN" value="{{$consulta->isbn}}">
                                    <p class="text-danger fst-italic">{{ $errors->first('txtISBN') }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Autor</label>
                                    <input type="text" class="form-control" id="txtAutor" name="txtAutor" value="{{$consulta->autor}}">
                                    <p class="text-danger fst-italic">{{ $errors->first('txtAutor') }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Editorial</label>
                                    <input type="text" class="form-control" id="txtEditorial" name="txtEditorial" value="{{$consulta->editorial}}">
                                    <p class="text-danger fst-italic">{{ $errors->first('txtEditorial') }}</p>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Titulo</label>
                                    <input type="text" class="form-control" id="txtTitulo" name="txtTitulo" value="{{$consulta->titulo}}">
                                    <p class="text-danger fst-italic">{{ $errors->first('txtTitulo') }}</p>

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Paginas</label>
                                    <input type="text" class="form-control" id="txtPaginas" name="txtPaginas" value="{{$consulta->paginas}}">
                                    <p class="text-danger fst-italic">{{ $errors->first('txtPaginas') }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email de editorial</label>
                                    <input type="text" class="form-control" id="txtEmailEditorial" name="txtEmailEditorial" value="{{$consulta->email}}">
                                    <p class="text-danger fst-italic">{{ $errors->first('txtEmailEditorial') }}</p>
                                </div>
                            </div>

                </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="ModalEliminar{{$consulta->idLibro}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEliminar" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Libro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <div class="card-body">
                    <h5 class="text-center">{{$consulta->titulo}}</h5>

                </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form action="{{route('libro.destroy',$consulta->idLibro) }}" method="POST">
                    @csrf
                    {!!method_field('delete')!!}
                    <button type="submit" class="btn btn-danger mx-2">Borrar</button>
                </form>
            </div>

        </div>
    </div>
</div>