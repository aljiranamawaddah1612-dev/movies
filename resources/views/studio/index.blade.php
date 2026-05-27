<x-app>

    <x-slot:title> {{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('studio.create') }}" role="button">Create</a>

    <form action="">

        <div class="row g-3 mb-3">
            <div class="col-md-8">
                <input type="text" class="form-control" id="keyword" name="keyword"
                    placeholder="Seacrh studio name ...">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>

    </form>

    <ul class="list-group">
        @foreach ($studios as $studio)
            <li class="list-group-item" style="font-size: 14px;">{{ $studios->firstItem() + $loop->index }}.
                {{ $studio->name }} -
                {{ $studio->type }} - {{ $studio->capacity }}
                <a class="btn btn-info btn-sm" href="{{ route('studio.show', $studio) }}" role="button">Detail</a>
                <a class="btn btn-warning btn-sm" href="{{ route('studio.edit', $studio) }}" role="button">Edit</a>
                <form action="{{ route('studio.destroy', $studio) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Anda yakin')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    </div style="font-size: 12px;">
    {{ $studios->links() }}
    </div>

</x-app>
