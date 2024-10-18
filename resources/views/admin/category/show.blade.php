@extends('layouts.admin')

@section('content')
    <div>
        <div><h1>Browse</h1></div>
        <div>
            <p>Category ID: {{ $category->id }}</p>
            <p>Category title: {{ $category->title }}</p>
        </div>

        <!-- Pager-->
        <div class="d-inline-block justify-content mb-4"><a class="btn btn-primary text-uppercase"
                                                            href="{{ route('admin.category.index') }}">←
                Back</a></div>
@endsection
