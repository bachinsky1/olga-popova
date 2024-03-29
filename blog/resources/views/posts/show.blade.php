@extends('layouts.app')
@section('post')
<header class="masthead" style="background-image: url('{{Vite::asset('resources/assets/img/post-bg.jpg')}}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>{{ $post->title}}</h1>
                    <h2 class="subheading">{{ __('Place for second header') }}</h2>
                    <span class="meta">
                    {{ __('Posted on') }} {{ $post->created_at}}
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                {!! $post->description!!}
            </div>
        </div>
    </div>
</article>
@overwrite