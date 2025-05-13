<x-layout title="Séries">
    <a href="{{route('series.create')}}" class="btn btn-dark mb-2">Adicionar</a>

    @isset($mensagemDeSucesso)
        <div class="alert alert-success">
            {{ $mensagemDeSucesso }}
        </div>
    @endisset


    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between">
                {{ $serie->nome }}

                <form action="{{ route('series.destroy', $serie->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">X</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-layout>
