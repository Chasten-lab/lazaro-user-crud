@extends('layouts.app')

@section('content')
    <h2>Edit User</h2>

    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
