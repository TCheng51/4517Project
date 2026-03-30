@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Member Registration</h2>

    <form action="{{ route('register.store') }}" method="post" class="registration-form">
        @csrf
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" required placeholder="Enter your last name" value="{{ old('last_name') }}">
            @error('last_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" required placeholder="Enter your first name" value="{{ old('first_name') }}">
            @error('first_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="address">Mailing Address</label>
            <input type="text" id="address" name="address" required placeholder="Enter your mailing address" value="{{ old('address') }}">
            @error('address')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Contact Phone</label>
            <input type="tel" id="phone" name="phone" required placeholder="(852) 1234-5678" pattern="[0-9]{8}" value="{{ old('phone') }}">
            @error('phone')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required placeholder="your.email@example.com" value="{{ old('email') }}">
            @error('email')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Enter a secure password" minlength="8">
            <small class="form-hint">Minimum 8 characters</small>
            @error('password')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Confirm your password">
            @error('password_confirmation')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Register</button>
            <button type="reset" class="btn btn-secondary">Clear</button>
        </div>
    </form>

    <div class="navigation-buttons">
        <a href="{{ route('index') }}" class="btn btn-outline">← Back to Home</a>
        <a href="{{ route('login') }}" class="btn btn-outline">Login to Reserve →</a>
    </div>
</div>
@endsection