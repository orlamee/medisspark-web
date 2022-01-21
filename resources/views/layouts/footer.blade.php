<div class="container-fluid newsletter-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-white newsletter-text mb-3">Join the <br>ecosystem now</h1>
                <h6 class="text-white banner-text">Trust MediSpark’s APIs and ecosystem to connect with your partners and customers.</h6>
            </div>
            <div class="col-md-6 newsletter-form desktop-padding">
                <form id="my-subscription" action="https://formspree.io/f/mlezdakw" method="POST" class="footer-form">
                    <div class="form-group">
                      <input type="email" class="form-control alignment" name="subscriber" placeholder="Enter your email address" required>
                    </div>
                    <button id="my-form-button" class="btn get-started-btn right-float">Get Started</button>
                    <p id="status" style="color: #fff;"></p>
                </form>
            </div>
        </div>
    </div>
</div>
<section class="footer-section">
    <div class="container text-left text-md-start mt-5">
        <div class="row mt-3 inner-footer">
            <div class="col-sm-3 col-12 mb-5">
                <div class="mb-4"><img src="/img/medispark-logo.png" class="logo-img" alt="Swift Medispark"></div>
                <p>Leading health companies trust MediSpark’s APIs and ecosystem to connect with their partners and customers.</p>
            </div>
            <div class="col-sm-3 col-6 desktop">
            <!-- Links -->
                <h6 class="fw-bold link-margin footer-title">
                    Company
                </h6>
                <p>
                    <a href="/about" class="text-reset">About</a>
                </p>
                <p>
                    <a href="/contact" class="text-reset">Contact</a>
                </p>
                <p>
                    <a href="#" class="text-reset">Products</a>
                </p>
                <p>
                    <a href="https://swiftmedispark.freshteam.com/jobs" target="_blank" class="text-reset">Careers</a>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-sm-3 col-6 desktop">
                <!-- Links -->
                <div class="flex-container mb-4">
                    <img src="/img/logo/usa.png" alt="" class="country-logo img-fluid">
                    <div class="footer-menu">
                        <h6 class="fw-bold footer-title">Wilmington, Delaware</h6>
                    </div>
                </div> 
                <p class="mb-4">2055 Limestone Rd STE 200-C Wilmington, DE 19808,<br>United States.</p>
                <p>info@swiftmedispark.com </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-sm-3 col-6 desktop">
                <!-- Links -->
                <div class="flex-container mb-4">
                    <img src="/img/logo/naij.png" alt="" class="country-logo img-fluid">
                    <div class="footer-menu">
                        <h6 class="fw-bold footer-title">Surulere, Lagos</h6>
                    </div>
                </div> 
                <!-- <h6 class="fw-bold mb-4 footer-title">
                    Social
                </h6> -->
                <p class="mb-4">11 Ore Close, Off Babatunde Street, Surulere 101283,<br>Lagos.</p>
                <p>+234 708 432 8977</p>
            </div>
        </div>
      <!-- Grid row -->
    </div>
    <button id="back-to-top" href="#" class="btn btn-light btn-floating back-to-top" type="button"><i class="bi bi-arrow-up"></i></button>
    
    <div class="container">
        <div class="row mb-3 mt-5">
            <div class="col text-center">
             <p>© 2022 Medispark empowers healthcare companies to achieve more</p> 
            </div>
        </div>
    </div>
</section>
<script>
    var form = document.getElementById("my-subscription");
    
    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("status");
      var data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
      }).then(response => {
        swal({
          title: "Thank you!",
          text: "Someone from MediSpark will be in touch soon",
          icon: "success",
          button: "OK",
        });
        // status.innerHTML = "Thanks for your submission!";
        form.reset()
      }).catch(error => {
        status.innerHTML = "Oops! There was a problem submitting your form"
      });
    }
    form.addEventListener("submit", handleSubmit)
</script>