<x-app>


    <x-slot:title> {{ $title }}</x-slot>

    <form method="POST" action="{{ route('seat.store') }}">
        @csrf

        <div class="mb-3">
            <label for="seat_number" class="form-label">Seat Number</label>
            <input type="text" class="form-control @error('seat_number') is-invalid @enderror" id="seat_number"
                name="seat_number" value="{{ old('seat_number') }}">
            @error('seat_number')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="row" class="form-label">Row</label>
            <input type="text" class="form-control @error('row') is-invalid @enderror" id="row" name="row"
                value="{{ old('row') }}">
            @error('row')
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
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control @error('status') is-invalid @enderror" id="status"
                name="status" value="{{ old('status') }}">
            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                name="price" value="{{ old('price') }}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="studio_id" class="form-label">Studio</label>
            <select name="studio_id" id="studio_id" class="form-select @error('studio_id') is-invalid @enderror">
                <option value="">Pilih Studio</option>
                @foreach ($studios as $studio)
                    <option value="{{ $studio->id }}">
                        {{ $studio->name }}
                    </option>
                @endforeach
            </select>
            @error('studio_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-warning " href="{{ route('seat.index') }}" role="button">Cancel</a>
        <ul class="list-group">

        </ul>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-app>
