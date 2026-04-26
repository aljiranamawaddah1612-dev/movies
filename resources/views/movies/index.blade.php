<x-app>

    <x-slot:title> {{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('movies.create') }}" role="button">Create</a>
    <ul class="list-group">
        @foreach ($movies as $movies)
            <li class="list-group-item" style="font-size: 14px;">{{ $loop->iteration }}.
                {{ $movies->judul }} -
                {{ $movies->genre }} -
                {{ $movies->release_year }} -
                {{ $movies->duration }} -
                {{ $movies->rating }}
                <a class="btn btn-warning btn-sm" href="{{ route('movies.edit', $movies) }}" role="button">Edit</a>
                <form action="{{ route('movies.destroy', $movies) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Anda yakin')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-app>
