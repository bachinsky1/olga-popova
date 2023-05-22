@extends('layouts.app')

@section('list')
<header class="masthead" style="background-image: url('{{Vite::asset('resources/assets/img/home-bg.jpg')}}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>My Super Blog</h1>
                    <span class="subheading">A Blog Theme</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">

            @if (session()->has('status'))
            <div x-data="{ showMessage: true }" x-show="showMessage" class="alert alert-primary alert-dismissible fade show" role="alert">
                {{ session()->get('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @foreach ($posts as $post)
            <div class="post-preview">
                <a href="{{ route('posts.show',$post->id) }}">
                    <h2 class="post-title">{{$post->title}}</h2>
                    <h3 class="post-subtitle">{{$post->decription}}</h3>
                </a>
                <p class="post-meta">
                    Posted on {{$post->created_at}}
                </p>
                @auth
                <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}" role="button">Edit</a>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST" onsubmit="return confirm('{{ trans('are You Sure ? ') }}');" style="display: inline-block;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-warning">Delete</button>
                </form>
                @endauth
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            @endforeach

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary me-md-2" href="{{ $posts->previousPageUrl() }}">← Younger Posts</a>
                <a class="btn btn-primary" href="{{ $posts->nextPageUrl() }}">Older Posts →</a>
            </div>
        </div>
    </div>
</div>


@overwrite