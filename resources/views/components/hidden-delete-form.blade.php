<div>
    <form id="deleteForm-".{{ $pessoa->id }} action="{{ route('pessoas.destroy', ['pessoa' => $pessoa->id]) }}"
        method="POST">
        @csrf
        @method('DELETE')
    </form>
</div>
