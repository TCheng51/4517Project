<!-- resources/views/partials/navbar.blade.php -->
<nav class="navbar" style="text-align: center; display: flex; justify-content: center; gap: 15px;">
    <a href="{{ route('home') }}" class="navbar-btn">Home</a>
    <a href="{{ route('register') }}" class="navbar-btn">Register</a>
    <a href="{{ route('login') }}" class="navbar-btn">Login</a>
    <a href="{{ route('reservation') }}" class="navbar-btn">Reservation</a>
</nav>