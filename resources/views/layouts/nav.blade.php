<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Swift Medispark</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <link rel="icon" href="{{ url('img/favicon.png') }}">
        <link rel="stylesheet" href="/css/custom.css">
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/js/app.js"></script>
        <script src="/js/loader.js"></script>
    </head>
    <body>
        <div class="loader-wrapper">
            <div class="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <div class="m-4">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light">
                <div class="container">
                    <a href="#" class="navbar-brand">
                        <img src="/img/medispark-logo.png" height="28" alt="Swift Medispark">
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="#" class="nav-item nav-link active font-weight-bold">About</a>
                            <a href="#" class="nav-item nav-link dropdown-toggle ml-3 font-weight-bold" data-bs-toggle="dropdown" role="button" aria-expanded="false">Products</a>
                            <!-- <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a> -->
                            <a href="#" class="nav-item nav-link ml-3 font-weight-bold">FAQ's</a>
                            <a href="#" class="nav-item nav-link ml-3 font-weight-bold" tabindex="-1">Contact</a>
                        </div>
                        <div class="navbar-nav ms-auto">
                            <a href="#" class="btn get-started-btn">Get Started</a>
                        </div>
                    </div>
                </div>
            </nav> 
        </div>
        <div class="container-fluid">
            @yield ('banner')
        </div>
    </body>
</html>
