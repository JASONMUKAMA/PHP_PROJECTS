<div class="container">
    <div class="col-md-6 offer" data-animate="fadeInDown">
        <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>  <a href="#">Get flat 35% off on orders over $50!</a>
    </div>
    <div class="col-md-6" data-animate="fadeInDown">
        <ul class="menu">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('login') }}">login</a>
                    @else

            <li>  <a href="{{ route('login') }}">Login</a></li>
                     <li>   <a href="{{ route('register') }}">Register</a></li>
                        @endauth
                    @endif
            <li><a href="contact.html">Contact</a>
            </li>
            <li><a href="#">Recently viewed</a>
            </li>
        </ul>
    </div>
</div>
