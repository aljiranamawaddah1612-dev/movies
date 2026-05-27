<x-app>


    <x-slot:title> {{ $title }}</x-slot>

    <form method="POST" action="{{ route('studio.store') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                value="{{ old('type') }}">
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="capacity" class="form-label">Capacity</label>
            <input type="number" class="form-control @error('capacity') is-invalid @enderror" id="capacity"
                name="capacity" value="{{ old('capacity') }}">
            @error('capacity')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-warning " href="{{ route('studio.index') }}" role="button">Cancel</a>
        <ul class="list-group">

        </ul>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-app>
