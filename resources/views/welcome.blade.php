@extends('layouts.app')

@section('title', 'Homepage')

@section('main-content')
    <section class="mt-5 py-1">
        <div class="container bg-dark py-4">
            <h1 class="title text-center text-success">Movies!</h1>
        </div>
    </section>


    <section class="mb-5 py-1">
        <div class="bg-light container py-4">
            <div class="row g-5">
                @foreach ($movies as $movie)
                        
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header my-movie-card-header">
                                <h4 class="text-center">{{$movie->title}}</h4>
                            </div>
                            <div class="card-body">                                
                                <p>Original Title: {{$movie->original_title}}</p>
                                <p>Nationality: {{$movie->nationality}}</p>
                                <p>Realese Date: {{$movie->date}}</p>
                                <p>Vote: {{$movie->vote}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>    
@endsection