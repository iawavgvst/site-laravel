@extends('layouts.admin')

@section('content')
    <div>
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
        <div class="d-inline-block justify-content mb-4"><a class="btn btn-primary text-uppercase"
                                                            href="{{ route('admin.post.create') }}">Creation</a></div>
        <div class="d-inline-block justify-content float-end mt-2 mb-4">{{ $posts->links() }}</div>
    </div>
@endsection
