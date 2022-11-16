<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    <h1>Movie Component </h1>
    <h2>{{ $tag }}</h2>
    <ul>
        @foreach ($controllerMovies as $movie)
        <li>{{ $movie }}</li>
            
        @endforeach
    </ul>
</div>