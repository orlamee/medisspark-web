<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Swift Medispark</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/custom.css">
        <link rel="icon" href="{{ url('img/favicon.png') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="/js/app.js"></script>
        <script src="/js/loader.js"></script>
        <style type="text/css">
		.dropdown-large{ padding:1rem; }

		/* ============ desktop view ============ */
		@media all and (min-width: 992px) {
			.dropdown-large{min-width:500px;}
		}	
		/* ============ desktop view .end// ============ */
	</style>

	<script type="text/javascript">
		document.addEventListener("DOMContentLoaded", function(){
	        /////// Prevent closing from click inside dropdown
	        document.querySelectorAll('.dropdown-menu').forEach(function(element){
	        	element.addEventListener('click', function (e) {
	        		e.stopPropagation();
	        	});
	        })
	    }); 
		// DOMContentLoaded  end
	</script>
    <script>
      $(document).ready(function(){
        $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });
            // scroll body to 0px on click
            $('#back-to-top').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 400);
                return false;
            });
        });
    </script>

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
                    <a href="/" class="navbar-brand">
                        <img src="/img/medispark-logo.png" height="28" alt="Swift Medispark">
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="/about" class="nav-item nav-link font-weight-bold ml-3">About</a>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-item nav-link dropdown-toggle ml-3 font-weight-bold" data-bs-toggle="dropdown">Products</a>
                                <div class="dropdown-menu dropdown-large mega-div">
                                    <div class="row g-3">
                                        <div class="col-6">
                                            <div class="flex-container">
                                                <img src="/img/relay-logo.png" alt="" class="menu-logo img-fluid">
                                                <div class="logo-menu">
                                                  <h6 class="title">Relay</h6>
                                                  <p class="mega-menu-text">Claim submission, Auto-vetting</p>
                                                </div>
                                            </div> 
                                        </div><!-- end col-3 -->
                                        <div class="col-6">
                                            <div class="flex-container">
                                                <img src="/img/refill.png" alt="" width="11px" class="img-fluid">
                                                <div class="logo-menu">
                                                  <h6 class="title">Refill</h6>
                                                  <p class="mega-menu-text">Medication refills, Virtual consultations</p>
                                                </div>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-6">
                                            <div class="flex-container">
                                                <img src="/img/refer.png" alt="" class="menu-logo img-fluid">
                                                <div class="logo-menu">
                                                  <h6 class="title">Refer</h6>
                                                  <p class="mega-menu-text">Referral services, health record sharing</p>
                                                </div>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-6">
                                            <div class="flex-container">
                                                <img src="/img/recount.png" alt="" class="menu-logo img-fluid">
                                                <div class="logo-menu">
                                                  <h6 class="title">Recount</h6>
                                                  <p class="mega-menu-text">Clinical trials, drug development research</p>
                                                </div>
                                            </div>
                                        </div><!-- end col-3 -->
                                    </div><!-- end row -->
                                </div> 
                            </li>
                            <a href="/faq" class="nav-item nav-link ml-3 font-weight-bold">FAQ's</a>
                            <a href="/contact" class="nav-item nav-link ml-3 font-weight-bold" tabindex="-1">Contact</a>
                        </div>
                        <div class="navbar-nav ms-auto d-flex align-items-center">
                            <a href="#" class="btn get-started-btn">Get Started</a>
                            <!-- <button type="button" class="btn btn-primary me-3">Sign up for free</button> -->
                        </div>
                    </div>
                </div>
            </nav> 
        </div>
        <div class="container-fluid">
            @yield ('content')
        </div>
    </body>
</html>