@extends('layouts.app')

@section('create')

<header class="masthead" style="background-image: url('{{Vite::asset('resources/assets/img/home-bg.jpg')}}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>{{ __('Post Edit') }}</h1>
                    <span class="subheading">{{ __('Edit post here') }}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="my-5">
                    <form id="contactForm" action="{{ route('posts.store') }}">
                        @csrf 
                        @method('post')
                        <div class="form-floating">
                            <input 
                                class="form-control @error('title') border-red-500 @enderror" 
                                id="title" 
                                name="title" 
                                type="text" 
                                placeholder="Enter title here..." 
                                data-sb-validations="required" 
                                data-sb-can-submit="no" 
                                value="{{old('title')}}" 
                                >
                            <label for="title">{{ __('Title') }}</label>
                            @error('title')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <textarea 
                                class="form-control @error('title') border-red-500 @enderror" 
                                id="description" 
                                name="description" 
                                placeholder="Enter description here..." 
                                style="height: 12rem" 
                                data-sb-validations="required" 
                                data-sb-can-submit="no" 
                                >{{old('description')}}</textarea>
                            <label for="description">Description</label>
                            @error('description')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>

                        <!-- Submit Button-->
                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">{{ __('Send') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    tinymce.init({
        selector: 'textarea#description'
    });
</script>

@overwrite