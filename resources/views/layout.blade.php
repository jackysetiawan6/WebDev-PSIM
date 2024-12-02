<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PSIM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link @yield('setAktifH')" aria-current="page" href="#">Home</a>
                    <a class="nav-link @yield('setAktifI')" href="#">Incident</a>
                </div>
                <div class="d-flex ms-auto align-items-center">
                    @if(Auth::check())
                        <span class="me-3">Hello, <strong>{{ Auth::user()->name }}</strong></span>
                        {{-- <img 
                            src="{{ Auth::user()->profile_picture ?? '/path/to/default-avatar.jpg' }}" 
                            alt="Profile Picture" 
                            class="rounded-circle" 
                            width="40" 
                            height="40"
                        > --}}
                    @else
                        <a href="" class="btn btn-primary ms-3">Login</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
    
    
    
    @yield('content')
    <script src="/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>