@extends('layouts.app')

@section('page-title', 'Movies')

@section('main-content')

<main class="my-4 text-center">
    <h1>
       About us
    </h1>

    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-12 col-sm-3 mb-4">
                <div class="card">
                    <div class="card-bordy">
                        <h4>
                            {{ $movie->title }}
                        </h4>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>

@endsection
