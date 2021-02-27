@extends('layouts.app')
@section('content')


<div class="container">
    <div class="card mb-3">
        <div class="card-header">
            Edit Form
        </div>
        <div class="card-body">
            
            <form action="admin/{{$post->slug}}/update" method="POST">

            @method('patch')

            @csrf
            <div class="form-group">
                <label for="Title"></label>
                <input type="text" name="title" id="title" value=" {{ old('title') ?? $post->title }} " class="form-control" placeholder="Title" >
                @error('title')
                    {{$message}}
                @enderror
            </div>

            <div class="form-group">
                <label for="title"></label>
                <textarea type="text" name="title" id="title" class="form-control" placeholder="Title" aria-describedby="helpId">{{ old('post_body') ?? $post->post_body }}</textarea>
                @error('title')
                {{$message}}
                @enderror
            </div>

            <div class="form-group">
                <label for="author"></label>
                <input type="text" name="author" id="author" value=" {{ old('author') ?? $post->author }}" class="form-control" placeholder="Author Name" aria-describedby="helpId">
                @error('author')
                {{$message}}
                @enderror
            </div>

            <div class="form-group">
                <label for="category"></label>
                <input type="text" name="category" id="category" value=" {{ old('category') ?? $post->category }}" class="form-control" placeholder="Category" aria-describedby="helpId">
                @error('category')
                {{$message}}
                @enderror            
            </div>

            <div class="form-group">
                <label for="tags"></label>
                <input type="text" name="tags" id="tags" value=" {{ old('tags') ?? $post->tags }}" class="form-control" placeholder="Tags" aria-describedby="helpId">
                @error('tags')
                {{$message}}
                @enderror 
            </div>

            <a href="" class="btn btn-success">Submit</a>

        </form>
        </div>

    </div>
</div>

@endsection