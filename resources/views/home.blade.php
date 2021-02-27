@extends('layouts.app')

@section('content')

<div class="container-fluid">
        <h3 class="mb-3">New Post</h3>  
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5">
                @foreach ($posts as $post)
                <div class="col mr-2">

                    <div class="card mb-3" style="width: 15rem; height: 22rem;">
                        <a href="post/{{$post->slug}} "><img src="https://images.unsplash.com/photo-1593642532009-6ba71e22f468?ixid=MXwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title"> {{$post->title}} </h5>
                            {{-- <p class="card-text"> {{ Str::limit($post->post_body,'100','') }} </p> --}}
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>

                        <div class="card-footer">
                            Publish on {{ $post->created_at->diffForHumans() }}
                        </div>
                        
                    </div>
                </div>
                @endforeach
            </div>
    {{ $posts->links() }}

</div>

@endsection
