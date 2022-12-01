<!-- Modal -->
<div class="modal fade" id="ModalIngresar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalIngresar" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ingresar Libro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <div class="card-body">
                    <form method="post" action="{{route('libro.store')}}">
                        @csrf
                        <div class="row">
                            <div class="col-6">

                                <div class="mb-3">
                                    <label class="form-label">ISBN</label>
                                    <input type="text" class="form-control" id="txtISBN" name="txtISBN" value="{{old('txtISBN')}}">
                                    <p class="text-danger fst-italic">{{ $errors->first('txtISBN') }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Autor</label>
                                    <input type="text" class="form-control" id="txtAutor" name="txtAutor" value="{{old('txtAutor')}}">
                                    <p class="text-danger fst-italic">{{ $errors->first('txtAutor') }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Editorial</label>
                                    <input type="text" class="form-control" id="txtEditorial" name="txtEditorial" value="{{old('txtEditorial')}}">
                                    <p class="text-danger fst-italic">{{ $errors->first('txtEditorial') }}</p>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Titulo</label>
                                    <input type="text" class="form-control" id="txtTitulo" name="txtTitulo" value="{{old('txtTitulo')}}">
                                    <p class="text-danger fst-italic">{{ $errors->first('txtTitulo') }}</p>

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Paginas</label>
                                    <input type="text" class="form-control" id="txtPaginas" name="txtPaginas" value="{{old('txtPaginas')}}">
                                    <p class="text-danger fst-italic">{{ $errors->first('txtPaginas') }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email de editorial</label>
                                    <input type="text" class="form-control" id="txtEmailEditorial" name="txtEmailEditorial" value="{{old('txtEmailEditorial')}}">
                                    <p class="text-danger fst-italic">{{ $errors->first('txtEmailEditorial') }}</p>
                                </div>
                            </div>
                        </div>

                </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>

        </div>
    </div>
</div>