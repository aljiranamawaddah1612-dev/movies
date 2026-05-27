<x-app>

    <x-slot:title> {{ $title }}</x-slot>

    <a class="btn btn-warning mb-3" href="{{ route('studio.index') }}" role="button">Back</a>

    {{-- studio --}}
    <h6>Data Studio</h6>
    <ul class="list-group">
        <li class="list-group-item" style="font-size: 16px;">Name: {{ $studio->name }}</li>
        <li class="list-group-item" style="font-size: 16px;">
            Created At: {{ $studio->created_at->format('d F Y H:i:s') }}
        </li>
        <li class="list-group-item" style="font-size: 16px;">
            Last Update: {{ $studio->updated_at->diffForHumans() }}
        </li>
    </ul>

    {{-- seat --}}

</x-app>
