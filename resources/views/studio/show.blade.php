<x-app>

    <x-slot:title> {{ $title }}</x-slot>

    <a class="btn btn-warning mb-3" href="{{ route('studio.index') }}" role="button">Back</a>

    {{-- studio --}}
    <h6>Data Studio</h6>
    <ul class="list-group mb-3">
        <li class="list-group-item" style="font-size: 16px;">Name: {{ $studio->name }}</li>
        <li class="list-group-item" style="font-size: 16px;">Type: {{ $studio->type }}</li>
        <li class="list-group-item" style="font-size: 16px;">Capacity: {{ $studio->capacity }}</li>
        <li class="list-group-item" style="font-size: 16px;">
            Created At: {{ $studio->created_at->format('d F Y H:i:s') }}
        </li>
        <li class="list-group-item" style="font-size: 16px;">
            Last Update: {{ $studio->updated_at->diffForHumans() }}
        </li>
    </ul>

    {{-- seat --}}
    <h6>Data Seat</h6>
    <ul class="list-group">
        @foreach ($studio->seats as $seat)
            <li class="list-group-item">{{ $seat->seat_number }}</li>
        @endforeach
    </ul>


</x-app>
