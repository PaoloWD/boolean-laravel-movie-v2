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
                    <br>
                    <h3 class="mt-5">Lista Progetti</h3>
                    <table class="table mb-5">
                        <thead>
                          <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Release date</th>
                            <th scope="col">Manage</th>
                          </tr>
                        </thead>
                        @foreach ($movies as $movie)
                        <tbody class="table-group-divider">
                            <tr>
                              <th scope="row">{{$movie->id}}</th>
                              <td>{{$movie->title}}</td>
                              <td>{{Str::limit($movie->category, 10)}}</td>
                              <td>{{Str::limit($movie->release_date, 10)}}</td>
                              <td class="text-center"><a href={{route("movies.edit", $movie->id)}} class="btn btn-primary">E</a>
                                 <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" class="delete-form d-inline-block">
                                  @csrf()
                                  @method('delete')
                    
                                  <button class="btn btn-danger destroy-btn">
                                    X
                                  </button>
                                </form> 
                            </td> 
                              
                            </tr>
                          </tbody>
                        @endforeach
                      </table>
                      <a href="{{ route('movies.create')}}" class="btn btn-primary">Aggiungi Film</a>
                        
                      
                        

                      
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  const delete_btn_list = document.querySelectorAll(".destroy-btn");
  delete_btn_list.forEach((btn) => {
      btn.addEventListener("submit", function(e) {
          e.preventDefault();
          const question = confirm(
              "Cancellare l'elemento?");
          if (question) {
              btn.submit();
          }
      })
  })
</script>

@endsection
