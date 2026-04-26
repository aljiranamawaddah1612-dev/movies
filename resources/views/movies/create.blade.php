<x-app>


    <x-slot:title> {{ $title }}</x-slot>

    <form method="POST" action="{{ route('movies.store') }}">
        @csrf

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Movie</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul"
                value="{{ old('judul') }}">
            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre Movie</label>
            <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre"
                name="genre" value="{{ old('genre') }}">
            @error('genre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="release_year" class="form-label">Release Year</label>
            <input type="number" class="form-control @error('release_year') is-invalid @enderror" id="release_year"
                name="release_year" value="{{ old('release_year') }}">
            @error('release_year')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duration</label>
            <input type="number" class="form-control @error('duration') is-invalid @enderror" id="duration"
                name="duration" value="{{ old('duration') }}">
            @error('duration')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="number" class="form-control @error('rating') is-invalid @enderror" id="rating"
                name="rating" value="{{ old('rating') }}">
            @error('rating')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-warning " href="{{ route('movies.index') }}" role="button">Cancel</a>
        <ul class="list-group">

        </ul>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-app>
