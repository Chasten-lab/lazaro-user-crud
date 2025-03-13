@extends('layouts.app')

@section('content')
    <h2>User Details</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
        </div>
    </div>

    <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Back</a>
@endsection
