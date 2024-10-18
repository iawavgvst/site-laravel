@extends('layouts.admin')

@section('content')
    <!-- Main Content-->
    <form action="{{ route('admin.category.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="title">Category</label>
            <input value="{{ old('title') }}" class="form-control" name="title" id="title" type="text" placeholder="Title"
                   style="margin-bottom: 15px"/>
            @error('title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button-->
        <div style="margin-bottom: 45px">
            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Create
            </button>
        </div>
    </form>
@endsection
