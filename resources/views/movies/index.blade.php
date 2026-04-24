<x-app>

    <x-slot:title> {{ $title }}</x-slot>

 <ul class="list-group">
    @foreach ($movies as $movies)
     <li class="list-group-item ">{{$loop->iteration}}.
      {{ $movies->judul }} - 
      {{ $movies->genre }} - 
      {{ $movies->release_year }} -  
      {{ $movies->duration }} -  
      {{ $movies->rating}} 
     </li>
    @endforeach
</ul>
</x-app>
