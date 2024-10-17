@extends('layouts.admin')

@section('content')
    <!-- Main Content-->
    <form action="{{ route('admin.user.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Name of user</label>
            <input value="{{ old('name') }}" class="form-control" name="name" id="name" type="text" placeholder="Name"
                   style="margin-bottom: 15px"/>
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input value="{{ old('email') }}" class="form-control" name="email" id="email"
                   placeholder="Email address" style="margin-bottom: 15px"/>
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Password</label>
            <input value="{{ old('password') }}" class="form-control" name="password" id="password"
                   placeholder="Password" style="margin-bottom: 15px"/>
            @error('password')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group" style="margin-bottom: 35px">
            <label for="category">User role</label>
            <select class="form-control" id="role" name="role">
                @foreach($roles as $role)
                    <option
                        {{ old('role_id') == $role->id ? ' selected' : '' }}
                        value="{{ $role->id }}">{{ $role->role }}</option>
                @endforeach
            </select>
        </div>

        <!-- Submit Button-->
        <div style="margin-bottom: 45px">
            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Add
            </button>
        </div>
    </form>
@endsection
