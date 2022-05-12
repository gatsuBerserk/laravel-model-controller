{{-- lista dei movies --}} 

@extends('layouts.main') 

@section('title', "Movies") 

@section('main')
<div class="cotaienr-fluid">
    <div class="row">
            @foreach ($movies as $movie)
            <div class="col-2">
                <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header">{{$movie->title}}</div>
                        <div class="card-body">
                        <h5 class="card-title">{{$movie->original_title}}</h5>
                        <p class="card-text">Anno produzioine: {{$movie->date}}</p>
                        <p class="card-text">Voto {{$movie->vote}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
        
@endsection
