@extends('layouts.app')

@section('content')
<div class="container">
<h2>Make a Reservation</h2>

<form action="/reservation" method="post" class="registration-form">
    @csrf
    <div class="form-group">
        <label for="reservation_date">Date</label>
        <input type="date" id="reservation_date" name="reservation_date" required value="{{ old('reservation_date') }}">
        @error('reservation_date')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="time_slot">Time Slot</label>
        <select id="time_slot" name="time_slot">
            <option value="2:00-4:00" {{ old('time_slot') == '2:00-4:00' ? 'selected' : '' }}>2:00 – 4:00 PM</option>
            <option value="6:00-9:00" {{ old('time_slot') == '6:00-9:00' ? 'selected' : '' }}>6:00 – 9:00 PM</option>
        </select>
        @error('time_slot')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="table_room">Select Table / Room</label>
        <select id="table_room" name="table_room">
            <option value="standard" {{ old('table_room') == 'standard' ? 'selected' : '' }}>Standard Table (4 players)</option>
            <option value="premium" {{ old('table_room') == 'premium' ? 'selected' : '' }}>Premium Table (6 players)</option>
            <option value="dragons_den" {{ old('table_room') == 'dragons_den' ? 'selected' : '' }}>Private Room – Dragon's Den (8 players)</option>
        </select>
        @error('table_room')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Reserve</button>
        <button type="reset" class="btn btn-secondary">Clear</button>
    </div>
</form>

<div class="navigation-buttons">
    <a href="{{ route('home') }}" class="btn btn-outline">← Back to Home</a>
    <a href="{{ route('register') }}" class="btn btn-outline">Member Registration</a>
    <a href="{{ route('login') }}" class="btn btn-outline">Login to Reserve</a>
</div>
</div>
@endsection
