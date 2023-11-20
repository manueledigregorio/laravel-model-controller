@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            @foreach ($movies as $movie )
            <div class="col-4 mt-3">
                <div class="card h-100" style="width: 18rem;">
                    <div class="card-body">
                      <h3 class="card-title">{{$movie->title}}</h3>
                      <h5 class="card-title">{{$movie->original_title}}</h5>
                      <p class="card-text">Nazionalità: {{$movie->nationality}}</p>
                      <p class="card-text">Data uscita: {{$movie->date}}</p>
                      <p class="card-text">voto: {{$movie->vote}}</p>
                      <a href="#" class="btn btn-primary">Vai</a>
                    </div>
                  </div>
            </div>
            @endforeach

        </div>
    </div>

@endsection

@section('title')
    | home
@endsection
