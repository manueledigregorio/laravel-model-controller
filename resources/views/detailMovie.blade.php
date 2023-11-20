@extends('layouts.main')

@section('content')
<div class="container d-flex justify-content-center mt-4">
    <div class="col-4 mt-3">
        <div class="card h-100" style="width: 18rem;">
            <div class="card-body">
              <h3 class="card-title">{{$movies->title}}</h3>
              <h5 class="card-title">{{$movies->original_title}}</h5>
              <p class="card-text">Nazionalità: {{$movies->nationality}}</p>
              <p class="card-text">Data uscita: {{$movies->date}}</p>
              <p class="card-text">voto: {{$movies->vote}}</p>
              <a href="{{route('home')}}" class="btn btn-primary">Torna indietro</a>
            </div>
          </div>
    </div>
</div>



@endsection

@section('title')
    | Film
@endsection
