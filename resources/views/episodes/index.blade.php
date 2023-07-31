<x-layout title="Episódios">
    <ul class="list-group">
        @foreach ($episodes as $episode)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Episódio {{ $episode->number }}

                <input type="checkbox" name="episodes[]" id="" value="{{$episode->id}}">
            </li>
        @endforeach
    </ul>

    <button class="btn btn-primary mt-3 mb-3">Salvar</button>
</x-layout>
