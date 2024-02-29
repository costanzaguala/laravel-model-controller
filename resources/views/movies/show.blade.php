@extends('layouts.app')

@section('page-title', $movie->title)

@section('main-content')

<main class="my-4 text-center">
    <h1>
        {{ $movie->title }}
    </h1>

    <div class="row justify-content-center my-5">
        <div class="col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>
                            Original title: {{ $movie->original_title }}
                        </li>
                        <li>
                            Nationality: {{ $movie->nationality }}
                        </li>
                        <li>
                            Date: {{ $movie->date }}
                        </li>
                        <li>
                            Vote: {{ $movie->vote }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
