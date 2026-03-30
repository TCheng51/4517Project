@extends('layouts.app')

@section('content')
<div class="container">
<h2>✅ Thank you for reserving your game session!</h2>

<div class="reservation-details">
    <p><strong>Email:</strong> {{ $email ?? 'example@email.com' }}</p>
    <p><strong>Date:</strong> {{ $date ?? '12 October 2026' }}</p>
    <p><strong>Time Slot:</strong> {{ $timeSlot ?? '6:00 – 9:00 PM' }}</p>
    <p><strong>Table / Room:</strong> {{ $tableRoom ?? "Dragon's Den" }}</p>
</div>

<div class="success-message">
    <p>🎉 Your adventure awaits!</p>
</div>

<div class="navigation-buttons">
    <a href="{{ route('index') }}" class="btn btn-primary">← Back to Home</a>
</div>
</div>
@endsection
