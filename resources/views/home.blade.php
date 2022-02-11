 
<h1>Movies</h1>

<div class="movies-list">

    @foreach ($movies as $movie)

        <div class="card">
            <h2>{{ $movie->title }} </h2>
            <div>Date: {{ $movie->date }}</div>
            <div>Vote: {{ $movie->vote }}</div>
        </div>

    @endforeach 

</div>