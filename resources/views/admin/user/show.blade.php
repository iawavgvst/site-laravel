@extends('layouts.admin')

@section('content')
    <div>
        <p>ID: {{ $user->id }}</p>
        <p>User name: {{ $user->name }}</p>
        <p>Email address: {{ $user->email }}</p>
        <p>User role: {{ $user->role }}</p>
        <p>Date registration: {{ $user->created_at }}</p>
        <p>Date updating: {{ $user->updated_at }}</p>
    </div>

    <!-- Pager-->
    <div class="d-inline-block justify-content mb-4"><a class="btn btn-primary text-uppercase"
                                                        href="{{ route('admin.user.index') }}">←
            Back</a></div>
    @can('view', auth()->user())
        <div class="d-inline-block justify-content mb-4 mg"><a class="btn btn-primary text-uppercase"
                                                               href="{{ route('admin.user.edit', $user->id) }}">Edition</a>
        </div>
        <div class="d-inline-block justify-content mb-4 float-end">
            <form action="{{ route('admin.user.delete', $user->id) }}"
                  method="post">
                @csrf
                @method('delete')
                <div>
                    <button class="btn btn-primary text-uppercase" id="submitButton" type="submit"
                            value="Deletion">
                        Deletion
                    </button>
                </div>
                @endcan
            </form>
        </div>
@endsection
