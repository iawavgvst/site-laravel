@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.user.update', $user->id) }}" method="post">
        @csrf
        @method('patch')

        <div class="form-group">
            <label for="name">User name</label>
            <input class="form-control" name="name" id="name" type="text" value="{{ $user->name }}"
                   style="margin-bottom: 15px"/>
        </div>

        <div class="form-group">
            <label for="name">Email address</label>
            <input class="form-control" name="email" id="email" type="text" value="{{ $user->email }}"
                   style="margin-bottom: 15px"/>
        </div>

        <div class="form-group">
            <label for="name">Password</label>
            <input class="form-control" name="password" id="password" type="text" value="{{ $user->password }}"
                   style="margin-bottom: 15px"/>
        </div>

        <div class="form-group">
            <label for="role">User role</label>
            <input class="form-control" name="role" id="role" type="text" value="{{ $user->role }}"
                   style="margin-bottom: 15px"/>
        </div>

        <!-- Submit Button-->
        <div style="margin-bottom: 45px">
            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Update
            </button>
        </div>
    </form>
@endsection
