@extends('layouts.admin')

@section('content')
    <table class="table">
        <tbody>
        <tr>
            <th scope="col">User ID</th>
            <th scope="col">User name</th>
            <th scope="col">User email</th>
            <th scope="col">User role</th>
            <th scope="col">Date registration</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td scope="row">{{ $user->id }}</td>
                <td id="{{ route('admin.user.show', $user->id) }}"><a href="{{ route('admin.user.show', $user->id) }}">{{ $user->name }}</a></td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->created_at }}</td>
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
                                                        href="{{ route('admin.user.create') }}">Add</a></div>

@endsection
