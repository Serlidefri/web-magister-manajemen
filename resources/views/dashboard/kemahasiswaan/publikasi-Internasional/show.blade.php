@extends('layouts.admin_template')
@section('title', 'Posts')
@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-lg-8">
            <a href="{{ route('posts.index') }}" class="btn btn-success btn-sm mt-4"> <i class="bi bi-arrow-left"></i> Back
                to
                my post</a>

            <h2 class="my-3">{{ $post['title'] }}</h2>

            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top mt-3"
                    alt="{{ $post->category->name }}" class="img-fluid ">
            </div>
            @else
            <img src="{{ asset('/img/blog-bg.jpg') }}" alt="Avatar" width="100%">
            @endif

            <article>
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection
