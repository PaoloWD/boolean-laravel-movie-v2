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

<form action="{{ route('movies.update', $movie->id) }}" method="POST">
    @csrf
    @method('put')
    <div class="input-group input-group-sm my-5">
        <span class="input-group-text" id="inputGroup-sizing-sm">Nome Film</span>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Categoria</label>
        <textarea class="form-control form-control @error('category') is-invalid @enderror" name="category" id="exampleFormControlTextarea1" rows="3">{{old('category')}}</textarea>
        @error('category')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Data uscita</span>
        <input type="text" name="release_date" class="form-control @error('release_date') is-invalid @enderror" value="{{old('release_date')}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        @error('release_date')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Salva</button>

</form>
</div>
@endsection