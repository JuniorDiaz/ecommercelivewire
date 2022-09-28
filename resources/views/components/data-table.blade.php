<div>
    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col-6">
                    <a class="add btn btn-primary m-3 mx-auto" data-toggle="modal" data-target="#{{$id}}"
                       href="#"><i class="fa fa-plus mr-1"></i>Novo</a>
                </div>
                <div class="col-6">
                    <input type="text" wire:model.debounce.500ms="search" name="search"
                           class="form-control m-3 mx-auto" id="search" placeholder="Pesquisar...">
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    {{$header}}
                    </thead>
                    <tbody>
                    {{$linha}}
                    </tbody>
                </table>
                <div>
                    {{ $links }}
                </div>
            </div>
        </div>
    </div>
</div>
