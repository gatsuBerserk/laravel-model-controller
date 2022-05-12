{{-- lista dei movies --}} 

@extends('layouts.main') 

@section('title', "Movies") 

@section('main')
    <div>
        <h1>
            <pre>Main content</pre> 
        </h1>
        
        <pre> @dump ($movies)</pre>
    </div>
@endsection
