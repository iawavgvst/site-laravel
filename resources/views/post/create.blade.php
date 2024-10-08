@extends('layouts.main')

@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('../assets/img/background.jpg')">
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
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="my-5">
                    <form action="{{ route('post.store') }}" method="post">
                        @csrf
                        <div class="form-floating">
                            <input class="form-control" name="title" id="title" type="text"/>
                            <label for="title">Title of post</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" name="description" id="description" type="text"/>
                            <label for="description">Description of post</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" name="content" id="content"
                                      style="height: 10rem"></textarea>
                            <label for="content">Content of post</label>
                            <div class="invalid-feedback">A content is required.
                            </div>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" name="image" id="image" type="text" style="margin-bottom: 50px"/>
                            <label for="image">Image</label>
                        </div>
                        <!-- Submit Button-->
                        <div>
                            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Share
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
