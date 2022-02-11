
<h2>Movies</h2>

@foreach ($movies as $movie)

    <div class="card">
        <h2>{{ $movie->title }} </h2>
        <div>Autore: {{ $movie->date }}</div>
        <div>YEAR: {{ $movie->vote }}</div>
    </div>
@endforeach