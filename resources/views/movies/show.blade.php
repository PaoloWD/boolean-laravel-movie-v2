@extends('layouts.app')

@section('content')
<h1 class="text-center mb-5">{{ $movie->name }}</h1>
<div class="d-flex justify-content-center">
    
  <div class="card text-center" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title">Titolo Film: {{$movie->title}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Data di uscita: {{$movie->release_date}}</h6>
    <p class="card-text">Categorie: {{$movie->category}}</p>
    <a href="{{ route('movies.index')}}" class="btn btn-primary mt-5">Torna indietro</a>
@endsection