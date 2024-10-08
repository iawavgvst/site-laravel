@extends('layouts.main')

@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/background.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Meanings Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="post.html">
                        <h3 class="post-title">Man must explore, and this is exploration at its greatest</h3>
                        <h4 class="post-subtitle">Problems look mighty small from 150 miles up</h4>
                    </a>
                    <p class="post-meta">
                        Posted on September 18, 2024
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4"/>
                <!-- Post preview-->
                <div class="post-preview">
                    @foreach($posts as $post)
                        <a href="{{ route('post.show', $post->id) }}">
                        <h3 class="post-title">{{ $post->title }}</h3>
                        <h4 class="post-subtitle">{{ $post->description }}</h4>
                        </a>
                        <p class="post-meta">
                            Posted on August 13, 2024
                        </p>
                    @endforeach
                </div>
                <!-- Divider-->
                <hr class="my-4"/>
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="post.html">
                        <h3 class="post-title">Science has not yet mastered prophecy</h3>
                        <h4 class="post-subtitle">We predict too much for the next year and yet far too little for the
                            next ten.</h4>
                    </a>
                    <p class="post-meta">
                        Posted on July 3, 2024
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4"/>
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="{{ route('post.show', $post->id) }}">
                        <h3 class="post-title">I believe every human has a finite number of heartbeats. I do not intend to waste any of mine.</h3>
                    </a>
                    <p class="post-meta">
                        Posted on June 1, 2024
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4"/>
                <!-- Pager-->
                <div class="d-inline-block justify-content mb-4"><a class="btn btn-primary text-uppercase"
                                                                    href="{{ route('post.create') }}">Creation</a></div>
                <div class="d-inline-block justify-content mb-4 float-end"><a class="btn btn-primary text-uppercase" href="#!">Older
                        Posts →</a></div>
        </div>
    </div>
@endsection
