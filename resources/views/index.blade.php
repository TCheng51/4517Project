@extends('layouts.app')

@section('content')
<div class="container">
<section>
    <p>
        Welcome to Dice & Dine Boardgame Café! 
        Your ultimate destination for boardgame adventures, delicious food, and great company.
    </p>
    <center>
        <h3>🎯 Game of the Month</h3>
        <p>Catan – Build your civilization and dominate the island!</p>
        <p>Published by: Fantasy Flight Games</p>
        <p>Players: 3-4 | Age: 10+ | Play Time: 60-90 minutes</p>
        <p>Book your table now and enjoy our special discount!</p>

        <h3>🎉 Special Offer</h3>
        <p><em>Special discount: 20% off all boardgame rentals this month!</em></p>
    </center>
</section>

<div class="navigation-buttons">
    <a href="{{ route('register') }}" class="btn btn-primary">Member Registration</a>
    <a href="{{ route('login') }}" class="btn btn-outline">Login to Reserve</a>
</div>
</div>
@endsection
