@extends('layouts.app')
@section('content')
<div class="container">
@if ($errors->any())
        <div class="alert alert-danger">
        I dati inseriti non sono validi:

        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
    @endif

<form action="{{ route('actors.update', $actor->id) }}" method="POST">
    @csrf
    @method('put')
    <div class="input-group input-group-sm my-5">
        <span class="input-group-text" id="inputGroup-sizing-sm">Nome attore</span>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$actor->name}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="input-group input-group-sm my-5">
        <span class="input-group-text" id="inputGroup-sizing-sm">Cognome attore</span>
        <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror" value="{{$actor->surname}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        @error('surname')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Salva</button>

</form>
</div>
@endsection