<div>

    <div wire:ignore.self class="modal fade" id="addSubCategoria" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Nova Sub-Categoria</h5>
                    <button type="button" class="close" wire:click="closeModal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="salvarSubCategoria">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-check-label" for="categoria-nome">
                                        Nome:
                                    </label>
                                    <input type="text" wire:model.defer="nome" name="nome"
                                           class="form-control @error('nome')is-invalid @enderror" id="categoria-nome">
                                    @error('nome')
                                    <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="categoria-for">Categoria</label>
                                    <select class="form-control" wire:model.defer="categoria_id" name="categoria_id" id="categorias">
                                        <option value="">Selecione uma opção</option>
                                        @foreach($categorias as $categoria)
                                            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input"
                                                   wire:model.defer="ativo" {{ $ativo === 1 ? 'checked' : '' }}>
                                            Ativo
                                            <i class="input-helper"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success btn-sm">
                                Salvar
                            </button>
                            <button type="button" class="btn btn-light btn-sm" wire:click="closeModal"
                                    data-dismiss="modal">
                                Fechar
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="deleteSubCategoria" tabindex="-1" role="dialog"
         aria-labelledby="ModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Deletar Categoria</h5>
                    <button type="button" class="close" wire:click="closeModal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="destroyCategoria">
                        <div class="modal-body">
                            <p>Deseja deletar esta sub-categoria?</p>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                            <button type="button" class="btn btn-light btn-sm" wire:click="closeModal"
                                    data-dismiss="modal">Fechar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
