@extends('layouts.app')

@section('page-title', 'Movies')

@section('main-content')

<main class="my-4 text-center">
    <h1>
       About us
    </h1>

    <div class="row justify-content-center my-5">
        @foreach ($movies as $movie)
            <div class="col-12 col-sm-5 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5>
                            {{ $movie->title }}
                        </h5>
                        <a href="{{route('movies.show', ['id' => $movie->id ]) }}" class="btn btn-dark">
                            Vai al singolo movie
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>

@endsection
