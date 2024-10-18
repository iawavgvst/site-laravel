@extends('layouts.admin')

@section('content')
    <div>
        <div><h1>Editing</h1></div>
        <form action="{{ route('admin.category.update', $category->id) }}" method="post">
            @csrf
            @method('patch')

            <div class="form-group">
                <label for="title">Category title</label>
                <input class="form-control" name="title" id="title" type="text" value="{{ $category->title }}"
                       style="margin-bottom: 15px" placeholder="New title"/>
            </div>

            <!-- Submit Button-->
            <div style="margin-bottom: 45px">
                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Update
                </button>
            </div>
        </form>
    </div>
@endsection
