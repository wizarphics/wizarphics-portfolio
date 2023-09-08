<nav class="navbar navbar-expand-lg bg-transparent py-3">
    <div class="container">
        <a class="navbar-brand"  href="{{ route('home') }}">
            <img src="/logo-light.svg" alt="Wizarphics Logo" width="150px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobileMenu"
                aria-controls="mobileMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25"/></svg>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="mobileMenu">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-4">
                <li class="nav-item">
                    <a class="nav-link @if(Request::routeIs('home')) active" aria-current="page" @else " @endif href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Request::routeIs('cases')) active" aria-current="page" @else " @endif target="_top" rel=noreferrer href="{{ route('cases') }}">Cases</a>
                </li>
                <li class="nav-item">
                    <a href="{{ env('APP_BLOG')  }}" target="_blank" rel=noreferrer class="nav-link">Blog</a>
                </li>
            </ul>
            <a href="{{ route('contact') }}" class="btn btn-primary px-4 py-2 rounded-pill" type="submit">Let's Talk</a>
        </div>
    </div>
</nav>
