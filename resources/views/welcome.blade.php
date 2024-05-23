@extends('layouts.app')

@section('title', 'Homepage')

@section('main-content')
    <section class="mt-5 py-1">
        <div class="container bg-dark py-4">
            <h1 class="title text-center text-coral">Movies!</h1>
        </div>
    </section>


    <section class="mb-5 py-1">
        <div class="bg-light container py-4">
            <div class="row g-5 justify-content-center">
                @foreach ($movies as $movie)                        
                    <div class="col-5">
                        <div class="card">
                            <div class="card-header my-movie-card-header">
                                <h4 class="text-center text-coral">{{$movie->title}}</h4>
                            </div>
                            <div class="card-body my-movie-card-body">
                                <div>
                                    <h5>Original Title: </h5> <p> {{$movie->original_title}}</p>
                                </div>
                                <div>
                                    <h5>Nationality: </h5> <p> {{$movie->nationality}}</p>
                                </div>
                                <div>
                                    <h5>Realese Date: </h5> <p> {{$movie->date}}</p>
                                </div>
                                <div>                                    
                                    <h5>Vote: </h5> <p> {{$movie->vote}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>    
@endsection