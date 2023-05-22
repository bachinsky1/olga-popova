@extends('layouts.app')

@section('edit')
<header class="masthead" style="background-image: url('{{Vite::asset('resources/assets/img/home-bg.jpg')}}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>{{ __('Post Edit') }}</h1>
                    <span class="subheading">Edit post here</span>
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
                    <form id="contactForm" method="POST" action="{{ route('posts.update',$post->id) }}">
                        @csrf
                        @method('put')
                        <div class="form-floating">
                            <input 
                                class="form-control @error('title') border-red-500 @enderror" 
                                id="title" 
                                name="title" 
                                type="text" 
                                placeholder="Enter title here..." 
                                data-sb-validations="required" 
                                data-sb-can-submit="no"
                                value="{{old('title', $post->title)}}"
                                required
                                >
                            <label for="title">Title</label>
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
                                required
                                
                                >{{ $post->description}}</textarea>
                            <label for="description">Description</label>
                            @error('description')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        
                        <!-- Submit Button-->
                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Send</button>
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
<!--         
<div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('posts.update',$post->id) }}">
                        @csrf
                        @method('put')
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Title</span>
                                <input type="text" name="title" class="block w-full @error('title') border-red-500 @enderror mt-1 rounded-md" placeholder="" value="{{old('title',$post->title)}}" />
                            </label>
                            @error('title')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div> 
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Description</span>
                                <textarea class="block w-full mt-1 rounded-md" name="description" rows="3">{{ $post->description}}</textarea>
                            </label>
                            @error('description')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
@overwrite