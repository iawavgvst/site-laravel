@extends('layouts.admin')

@section('content')
    <div>
        <div><h1>Categories</h1></div>
    <table class="table">
        <tbody>
        <tr>
            <th scope="col">Category ID</th>
            <th scope="col">Category title</th>
            <th class="text-center" colspan="3" scope="col">Actions</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td scope="row">{{ $category->id }}</td>
                <td>{{ $category->title }}</a></td>
                <td id="{{ route('admin.category.show', $category->id) }}"><a href="{{ route('admin.category.show', $category->id) }}"><i class="far fa-eye"></i></a></td>
                <td id="{{ route('admin.category.edit', $category->id) }}"><a href="{{ route('admin.category.edit', $category->id) }}"><i class="fas fa-pencil-alt" style="color: green"></i></a></td>
                <td id="{{ route('admin.category.delete', $category->id) }}">
                    <form action="{{ route('admin.category.delete', $category->id) }}"
                          method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn text-uppercase"><a href="{{ route('admin.category.delete', $category->id) }}"><i class="fas fa-solid fa-trash"
                                                                                          style="color: red"></i></a></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


{{--    <div class="post-preview">
        @foreach($users as $user)
            <a href="{{ route('admin.user.show', $user->id) }}">
                <h3 class="post-title">{{ $user->name }}</h3>
                <h4 class="post-subtitle">{{ $user->email }}</h4>
            </a>
        @endforeach
    </div>--}}

    <!-- Pager-->
    <div class="d-inline-block justify-content mb-4"><a class="btn btn-primary text-uppercase"
                                                        href="{{ route('admin.category.create') }}">Add</a></div>
    </div>
@endsection
