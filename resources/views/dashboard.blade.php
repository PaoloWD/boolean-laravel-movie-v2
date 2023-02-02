@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <a href="{{ route('movies.index')}}" class="btn btn-primary">Vedi Films</a>
                    <a href="{{ route('movies.create')}}" class="btn btn-success">Inserisci nuovo film</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
