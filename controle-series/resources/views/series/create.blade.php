<x-layout title="Nova Série">
    <form action="{{route('series.store')}}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text"
                       id="nome"
                       autofocus
                       name="nome"
                       class="form-control"
                       value="{{old('nome')}}">
            </div>

            <div class="col-2">
                <label for="seasonQty" class="form-label">Temporadas:</label>
                <input type="text"
                       id="seasonQty"
                       name="seasonQty"
                       class="form-control"
                       value= "{{old('seasonQty')}}">
            </div>

            <div class="col-2">
                <label for="episodes" class="form-label">Episódios:</label>
                <input type="text"
                       id="episodes"
                       name="episodes"
                       class="form-control"
                       value="{{old('episodes')}}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>

</x-layout>
