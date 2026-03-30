@extends('layouts.app')

@section('content')
<div class="container">
<div class="confirmation-message">
    <h2>📝 Confirm Your Registration</h2>
    <p>Please review your information before submitting your registration.</p>
</div>

<div class="confirmation-details">
    <h3>Registration Details</h3>
    <p>You are about to create a member account at Dice & Dine Boardgame Café.</p>
    
    <div class="info-box">
        <h4>What happens next?</h4>
        <ul>
            <li>Your member account will be created with a unique member number</li>
            <li>You'll be able to make reservations for gaming sessions</li>
            <li>You can access your account using your email and password</li>
        </ul>
    </div>
    
    <div class="actions">
        <form action="{{ route('register.store') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">Confirm Registration</button>
        </form>
        
        <div class="navigation-buttons">
            <a href="{{ route('register') }}" class="btn btn-outline">← Back to Registration Form</a>
            <a href="{{ route('index') }}" class="btn btn-outline">Back to Home</a>
        </div>
    </div>
</div>
</div>
@endsection
