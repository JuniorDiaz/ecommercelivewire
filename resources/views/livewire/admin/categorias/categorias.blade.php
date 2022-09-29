@section('titleHead')
    Categorias
@endsection

<div>
    <div class="page-header mt-5">
        <h3 class="page-title">
            Categorias
        </h3>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Categorias</li>
            </ol>
        </nav>
    </div>

    @include('livewire.admin.categorias.modalform')

    <x-data-table>
        <x-slot:id>addCategoria</x-slot>

            <x-slot:header>
                <tr>
                    <th>Nome</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                </tr>
                </x-slot>

                <x-slot:linha>
                    @foreach($categorias as $categoria)
                        <tr>
                            <td>{{$categoria->nome}}</td>
                            <td>{{($categoria->ativo == 1 ? 'Ativo' : 'Desativado')}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="#" wire:click.prevent="editarCategoria({{ $categoria->id }})"
                                       data-toggle="modal"
                                       data-target="#addCategoria"
                                       class="btn btn-success btn-sm mr-2">Editar</a>

                                    <a href="#" wire:click.prevent="deletarCategoria({{ $categoria->id }})"
                                       data-toggle="modal"
                                       data-target="#deleteCategoria"
                                       class="btn btn-danger btn-sm">Deletar</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </x-slot:linha>

                <x-slot:links>
                    {{$categorias->links()}}
                </x-slot:links>
    </x-data-table>

</div>
@push('scripts')
    <script>
        window.addEventListener('close-modal', event => {
            $('#addCategoria').modal('hide');
            $('#deleteCategoria').modal('hide');
        });
    </script>
@endpush
