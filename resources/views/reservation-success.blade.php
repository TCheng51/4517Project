@extends('layouts.app')

@section('content')
<div class="container">
<div class="success-message">
    <h2>🎉 Reservation Confirmed!</h2>
    <p>Your reservation has been successfully created. We look forward to seeing you!</p>
</div>

<div class="reservation-details">
    <h3>Reservation Information</h3>
    <div class="reservation-info">
        <p><strong>Reservation ID:</strong> {{ $reservation->id ?? 'N/A' }}</p>
        <p><strong>Date:</strong> {{ $reservation->reservation_date ?? 'N/A' }}</p>
        <p><strong>Time Slot:</strong> {{ $reservation->time_slot ?? 'N/A' }}</p>
        <p><strong>Table/Room:</strong> {{ $reservation->table_room ?? 'N/A' }}</p>
        <p><strong>Status:</strong> {{ $reservation->status ?? 'pending' }}</p>
    </div>
    
    <h3>Important Information</h3>
    <div class="info-box">
        <ul>
            <li>Please arrive 10 minutes before your scheduled time</li>
            <li>Bring your member ID for check-in</li>
            <li>Our game library will be available for your selection</li>
            <li>Food and beverage service starts upon arrival</li>
        </ul>
    </div>
    
    <h3>Need to Make Changes?</h3>
    <div class="info-box">
        <p>If you need to modify or cancel your reservation, please contact us at least 2 hours before your scheduled time.</p>
        <p>Email: reservations@diceanddine.com<br>
        Phone: (852) 1234-5678</p>
    </div>
</div>

<div class="navigation-buttons">
    <a href="{{ route('reservation') }}" class="btn btn-primary">Make Another Reservation</a>
    <a href="{{ route('home') }}" class="btn btn-outline">← Back to Home</a>
</div>
</div>
@endsection
