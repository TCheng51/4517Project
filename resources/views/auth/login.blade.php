@extends('layouts.app')

@section('content')
<div class="container">
<h2>Login to Reserve</h2>

<form action="{{ route('login.submit') }}" method="post" class="registration-form">
    @csrf
    <div class="form-group">
        <label for="email">Email Address</label>
        <div class="input-wrapper">
            <input type="email" id="email" name="email" required placeholder="your.email@example.com" value="{{ old('email') }}">
            @error('email')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <div class="input-wrapper">
            <input type="password" id="password" name="password" required placeholder="Enter your password">
            @error('password')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
</form>

<div class="navigation-buttons">
    <a href="{{ route('home') }}" class="btn btn-outline">← Back to Introduction</a>
</div>
</div>
@endsection
