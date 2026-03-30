@extends('layouts.app')

@section('content')
<div class="container">
<section>
    <p>
        Welcome to Fable - an immersive boardgame café! 
        Your ultimate destination for boardgame adventures, delicious food, and great company.
    </p>
    <center>
        <h3>🎯 Game of the Month</h3>
        <p>Check back soon for our next featured game!</p>

        <h3>🎉 Special Offer</h3>
        <p><em>Special discount: 20% off all boardgame rentals this month!</em></p>
    </center>
</section>

<div class="navigation-buttons" style="margin-top: 2rem;">
    <a href="{{ route('register') }}" class="btn btn-primary">Member Registration</a>
    <a href="{{ route('login') }}" class="btn btn-outline">Login to Reserve</a>
</div>
</div>
@endsection
