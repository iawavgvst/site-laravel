@extends('layouts.main')

@section('content')
<!-- Page Header-->
<header class="masthead" style="background-image: url('../assets/img/second-post.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>{{ $post->title }}</h1>
                    <h2 class="subheading">{{ $post->description }}</h2>
                    <span class="meta">Posted on {{ $post->posted_on }}</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>{{ $post->content }}</p>
                <p>{{ $post->content }}</p>
                <p>{{ $post->content }}</p>
                <h2 class="section-heading">The most certain way to succeed is always to try just one more time</h2>
                <p>{{ $post->content }}</p>
                <p>{{ $post->content }}</p>
                <p>{{ $post->content }}</p>
                <p>{{ $post->content }}</p>
                <!-- Pager-->
                <div class="d-inline-block justify-content mb-4"><a class="btn btn-primary text-uppercase"
                                                                    href="{{ route('post.index') }}">← Back</a></div>
                <div class="d-inline-block justify-content mb-4 mg"><a class="btn btn-primary text-uppercase"
                                                                    href="{{ route('post.edit', $post->id) }}">Edition</a></div>
                    <div class="d-inline-block justify-content mb-4 float-end">
                        <form action="{{ route('post.delete', $post->id) }}"
                              method="post">
                            @csrf
                            @method('delete')
                            <div>
                                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit"
                                        value="Deletion">
                                    Deletion
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
@endsection
