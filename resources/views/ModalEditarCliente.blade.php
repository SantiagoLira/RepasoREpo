<!-- Modal -->
<div class="modal fade" id="ModalActualizar{{$consulta->idCliente}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalActualizar" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ingresar Cliente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <div class="card-body">
                    <form method="post" action="{{route('clientes.update',$consulta->idCliente)}}">
                        @csrf
                        {!!method_field('PUT')!!}
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="{{$consulta->nombre}}">
                                    <p class="text-danger fst-italic">{{ $errors->first('txtNombre') }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">INE</label>
                                    <input type="text" class="form-control" id="txtINE" name="txtINE" value="{{$consulta->ine}}">
                                    <p class="text-danger fst-italic">{{ $errors->first('txtINE') }}</p>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="txtApellido" name="txtApellido" value="{{$consulta->apellido}}">
                                    <p class="text-danger fst-italic">{{ $errors->first('txtApellido') }}</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email </label>
                                    <input type="text" class="form-control" id="txtEmailCliente" name="txtEmailCliente" value="{{$consulta->email}}">
                                    <p class="text-danger fst-italic">{{ $errors->first('txtEmailCliente') }}</p>
                                </div>
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