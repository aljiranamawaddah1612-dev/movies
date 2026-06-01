<x-app>

    <x-slot:title> {{ $title }}</x-slot>

    <a class="btn btn-warning mb-3" href="{{ route('seat.index') }}" role="button">Back</a>

    {{-- Seat --}}
    <h6>Data Seat</h6>
    <ul class="list-group mb-3">
        <li class="list-group-item" style="font-size: 16px;">Seat Number: {{ $seat->seat_number }}</li>
        <li class="list-group-item" style="font-size: 16px;">Row: {{ $seat->row }}</li>
        <li class="list-group-item" style="font-size: 16px;">Type: {{ $seat->type }}</li>
        <li class="list-group-item" style="font-size: 16px;">Status: {{ $seat->status }}</li>
        <li class="list-group-item" style="font-size: 16px;">Price: Rp. {{ number_format($seat->price) }}</li>
        <li class="list-group-item" style="font-size: 16px;">
            Created At: {{ $seat->created_at->format('d F Y H:i:s') }}
        </li>
        <li class="list-group-item" style="font-size: 16px;">
            Last Update: {{ $seat->updated_at->diffForHumans() }}
        </li>
    </ul>

    {{-- Studio --}}
    <h6>Data Studio</h6>
    <ul class="list-group">
        <li class="list-group-item" style="font-size: 16px;">Name: {{ $seat->studio->name }}</li>
        <li class="list-group-item" style="font-size: 16px;">Type: {{ $seat->studio->type }}</li>
        <li class="list-group-item" style="font-size: 16px;">Capacity: {{ $seat->studio->capacity }}</li>
        <li class="list-group-item" style="font-size: 16px;">Created At:
            {{ $seat->studio->created_at->format('d F Y H:i:s') }}</li>
        <li class="list-group-item" style="font-size: 16px;">Last Update:
            {{ $seat->studio->updated_at->diffForHumans() }}</li>
    </ul>

</x-app>
