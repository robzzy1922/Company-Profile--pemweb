
<nav class="navbar navbar-expand-lg fixed-top navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="index.html" class="navbar-brand p-0">
        <h1 class="display-6 text-primary m-0"><i class="fas fa-envelope me-3"></i>Mailler</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('index') }}" class="nav-item nav-link {{ Request::is('index') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }} ">About</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }} ">Contact Us</a>
            </div>
        </div>
        <a href="#" class="btn btn-light border border-primary rounded-pill text-primary py-2 px-4 me-4">Log In</a>
        <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4">Sign Up</a>
    </div>
</nav>
