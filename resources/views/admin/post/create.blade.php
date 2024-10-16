@extends('layouts.main')

@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url( {{ asset('assets/img/background.jpg') }} )">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Post Creation</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            {{--            <div class="col-md-10 col-lg-8 col-xl-7">--}}
            {{--                <div class="my-5">--}}
            <form action="{{ route('post.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="title">Title of post</label>
                    <input value="{{ old('title') }}" class="form-control" name="title" id="title" type="text" placeholder="Title" style="margin-bottom: 15px"/>
                    @error('title')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description of post</label>
                    <input value="{{ old('description') }}" class="form-control" name="description" id="description"
                           placeholder="Description" style="margin-bottom: 15px"/>
                </div>

                <div class="form-group">
                    <label for="content">Content of post</label>
                    <textarea class="form-control" name="content" id="content"
                              style="height: 10rem; margin-bottom: 15px" placeholder="Content">{{ old('content') }}</textarea>
                    @error('content')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input value="{{ old('image') }}" class="form-control" name="image" id="image" type="text" style="margin-bottom: 15px"
                           placeholder="Image"/>
                </div>

                <div class="form-group">
                    <label for="posted_on">Date</label>
                    <input value="{{ old('posted_on') }}" class="form-control" name="posted_on" id="posted_on" type="text" style="margin-bottom: 15px"
                           placeholder="Date"/>
                    @error('posted_on')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group" style="margin-bottom: 35px">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="category_id">
                        @foreach($categories as $category)
                            <option
                                {{ old('category_id') == $category->id ? ' selected' : '' }}
                                value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Submit Button-->
                <div style="margin-bottom: 45px">
                    <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Share
                    </button>
                </div>
            </form>
        </div>
    </div>
        </div>
    </div>
@endsection
