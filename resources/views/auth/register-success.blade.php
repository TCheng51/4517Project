@extends('layouts.app')

@section('content')
<div class="container">
<div class="success-message">
    <h2>🎉 Registration Successful!</h2>
    <p>Your account has been created successfully. You can now login to make reservations.</p>
</div>

<div class="registration-details">
    <h3>Member Information</h3>
    <div class="member-info">
        <p><strong>Member Number:</strong> {{ $member->member_number ?? '0000' }}</p>
        <p><strong>Name:</strong> {{ $member->first_name ?? '' }} {{ $member->last_name ?? '' }}</p>
        <p><strong>Email:</strong> {{ $member->email ?? 'example@email.com' }}</p>
    </div>
    
    <h3>Next Steps</h3>
    <ul>
        <li>Go to login page to access your account</li>
        <li>Make a reservation for your gaming session</li>
        <li>Enjoy our boardgame café!</li>
    </ul>
</div>

<div class="navigation-buttons">
    <a href="{{ route('login') }}" class="btn btn-primary">Login Now</a>
    <a href="{{ route('home') }}" class="btn btn-outline">← Back to Home</a>
</div>
</div>
@endsection
