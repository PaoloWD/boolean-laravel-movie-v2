@extends('layouts.app')

@section('content')
<h1 class="text-center mb-5">{{ $actor->name }}</h1>
<div class="d-flex justify-content-center">
    
  <div class="card text-center" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title">Nome attore: {{$actor->name}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Cognome attore: {{$actor->surname}}</h6>
    <a href="{{ route('movies.index')}}" class="btn btn-primary mt-5">Torna indietro</a>
@endsection