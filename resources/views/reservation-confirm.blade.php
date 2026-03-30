@extends('layouts.app')

@section('content')
<div class="container">
<div class="confirmation-message">
    <h2>📅 Confirm Your Reservation</h2>
    <p>Please review your reservation details before submitting.</p>
</div>

<div class="confirmation-details">
    <h3>Reservation Information</h3>
    <p>You are about to make a reservation at Dice & Dine Boardgame Café.</p>
    
    <div class="info-box">
        <h4>Reservation Policy</h4>
        <ul>
            <li>Reservations must be made at least 24 hours in advance</li>
            <li>Please arrive 10 minutes before your scheduled time</li>
            <li>Cancellations should be made at least 2 hours before</li>
            <li>Each reservation is for a maximum of 4 hours</li>
        </ul>
    </div>
    
    <div class="info-box">
        <h4>What to Expect</h4>
        <ul>
            <li>Access to our extensive boardgame library</li>
            <li>Dedicated table space for your group</li>
            <li>Food and beverage service available</li>
            <li>Game master assistance if needed</li>
        </ul>
    </div>
    
    <div class="actions">
        <form action="{{ route('reservation.submit') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">Confirm Reservation</button>
        </form>
        
        <div class="navigation-buttons">
            <a href="{{ route('reservation') }}" class="btn btn-outline">← Back to Reservation Form</a>
            <a href="{{ route('index') }}" class="btn btn-outline">Back to Home</a>
        </div>
    </div>
</div>
</div>
@endsection
