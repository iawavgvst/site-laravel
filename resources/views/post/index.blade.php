@extends('layouts.main')

@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url( {{ asset('assets/img/background.jpg') }} )">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Meanings Blog</h1>
                        <h2 class="subheading">It is hard to find words when there really is something to say. But I will try.</h2>
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
                    @foreach($posts as $post)
                        <a href="{{ route('post.show', $post->id) }}">
                        <h3 class="post-title">{{ $post->title }}</h3>
                        <h4 class="post-subtitle">{{ $post->description }}</h4>
                        </a>
                        <p class="post-meta">
                            Posted on {{ $post->posted_on }}
                        </p>
                    @endforeach
                </div>
                <!-- Pager-->
                @can('view', auth()->user())
                <div class="d-inline-block justify-content mb-4"><a class="btn btn-primary text-uppercase"
                                                                    href="{{ route('admin.post.create') }}">Creation</a></div>
                @endcan
                <div class="d-inline-block justify-content float-end mt-2 mb-4">{{ $posts->links() }}</div>
        </div>
    </div>
@endsection
