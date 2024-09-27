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
                <hr class="my-4" />
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="post.html"><h3 class="post-title">I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.</h3></a>
                    <p class="post-meta">
                        Posted on August 13, 2024
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="post.html">
                        <h3 class="post-title">Science has not yet mastered prophecy</h3>
                        <h4 class="post-subtitle">We predict too much for the next year and yet far too little for the next ten.</h4>
                    </a>
                    <p class="post-meta">
                        Posted on July 3, 2024
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="post.html">
                        <h3 class="post-title">Failure is not an option</h3>
                        <h4 class="post-subtitle">Many say exploration is part of our destiny, but it’s actually our duty to future generations.</h4>
                    </a>
                    <p class="post-meta">
                        Posted on June 1, 2024
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
            </div>
        </div>
    </div>
@endsection
