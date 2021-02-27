@extends('layouts.app')
@section('content')
    
    <div class="container">

        <div class="title">

           <h2> {{ $posts->title }} </h2>

        </div>

        <div class="body">
            
            <p> {{ $posts->post_body }} </p>

        </div>   
    </div>

@endsection