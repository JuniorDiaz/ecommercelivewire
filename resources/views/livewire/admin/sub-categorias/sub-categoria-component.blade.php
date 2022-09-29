@section('titleHead')
    Sub-Categorias
@endsection

<div>
    <div class="page-header mt-5">
        <h3 class="page-title">
            Sub-Categorias
        </h3>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sub-Categorias</li>
            </ol>
        </nav>
    </div>

    @include('livewire.admin.sub-categorias.modalform')

    <x-data-table>
        <x-slot:id>addSubCategoria</x-slot>

            <x-slot:header>
                <tr>
                    <th>Nome</th>
                    <th>Ativo</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
                </x-slot>

                <x-slot:linha>
                    @foreach($subCategorias as $subCategoria)
                        <tr>
                            <td>{{$subCategoria->nome}}</td>
                            <td>{{($subCategoria->ativo == 1 ? 'Ativo' : 'Desativado')}}</td>
                            <td>{{$subCategoria->categoria->nome}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="#" wire:click.prevent="editarCategoria({{ $subCategoria->id }})"
                                       data-toggle="modal"
                                       data-target="#addCategoria"
                                       class="btn btn-success btn-sm mr-2">Editar</a>

                                    <a href="#" wire:click.prevent="deletarCategoria({{ $subCategoria->id }})"
                                       data-toggle="modal"
                                       data-target="#deleteCategoria"
                                       class="btn btn-danger btn-sm">Deletar</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </x-slot:linha>

                <x-slot:links>
                    {{$subCategorias->links()}}
                </x-slot:links>
    </x-data-table>
</div>

@push('scripts')
    <script>
        window.addEventListener('close-modal', event => {
            $('#addSubCategoria').modal('hide');
            $('#deleteSubCategoria').modal('hide');
        });
    </script>
@endpush
