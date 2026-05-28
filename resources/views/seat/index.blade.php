<x-app>

    <x-slot:title> {{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <form action="">

        <div class="row g-3 mb-3">
            <div class="col-md-4">
                <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Seacrh seat name ..."
                    value="{{ request('keyword') }}">
            </div>
            <div class="col-md-4">
                <select class="form-select" id="studio_id" name="studio_id">
                    <option value="">All Studio</option>
                    @foreach ($studios as $studio)
                        <option value="{{ $studio->id }}" {{ request('studio_id') == $studio->id ? 'selected' : '' }}>
                            {{ $studio->name }}
                        </option>
                    @endforeach

                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>

    </form>

    <a class="btn btn-primary mb-3" href="{{ route('seat.create') }}" role="button">Create</a>
    <ul class="list-group">
        @foreach ($seats as $seat)
            <li class="list-group-item" style="font-size: 14px;">{{ $seats->firstItem() + $loop->index }}.
                {{ $seat->seat_number }} -
                {{ $seat->row }} -
                {{ $seat->type }} -
                {{ $seat->status }} -
                Rp. {{ number_format($seat->price) }} - {{ $seat->studio->name }}
                <a class="btn btn-warning btn-sm" href="{{ route('seat.edit', $seat) }}" role="button">Edit</a>
                <form action="{{ route('seat.destroy', $seat) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Anda yakin')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    {{ $seats->links() }}

</x-app>
