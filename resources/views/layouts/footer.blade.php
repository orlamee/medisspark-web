
<div class="container-fluid newsletter-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-white newsletter-text mb-3">Join the <br>ecosystem now</h1>
                <h6 class="text-white banner-text">Trust MediSpark’s APIs and ecosystem to connect with your partners and customers.</h6>
            </div>
            <div class="col-md-6 newsletter-form">
                <form class="row g-3 align-items-center">
                    <div class="col-7">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="mail" placeholder="Enter your email address" required>
                        </div>
                    </div>
                    <div class="col-5">
                        <button type="button" id="send" class="btn get-started-btn">Get Started</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<section class="footer-section">
    <div class="container text-left text-md-start mt-5">
        <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <div class=""><img src="/img/medispark-logo.png" height="28" alt="Swift Medispark"></div>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
                <h6 class="fw-bold mb-4 footer-title">
                    Company
                </h6>
                <p>
                    <a href="/about" class="text-reset">About</a>
                </p>
                <p>
                    <a href="/contact" class="text-reset">Contact</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Careers</a>
                </p>
                <p>
                    <a href="/faq" class="text-reset">FAQ'S</a>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="fw-bold mb-4 footer-title">
                    Products
                </h6>
                <p>
                    <a href="/#products" class="text-reset">Relay</a>
                </p>
                <p>
                    <a href="/#products" class="text-reset">Recount</a>
                </p>
                <p>
                    <a href="/#products" class="text-reset">Refill</a>
                </p>
                <p>
                    <a href="/#products" class="text-reset">Refer</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Loans</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Omni</a>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="fw-bold mb-4 footer-title">
                    Socials
                </h6>
                <!-- <p>
                    <a href="#!" class="text-reset">Github</a>
                </p> -->
                <p>
                    <a href="https://twitter.com/swiftmedispark" target="_blank" class="text-reset">Twitter</a>
                </p>
                <p>
                    <a href="https://www.instagram.com/swiftmedispark/" target="_blank" class="text-reset">Instagram</a>
                </p>
                <p>
                    <a href="https://www.linkedin.com/company/swift-medispark" target="_blank" class="text-reset">Linkedin</a>
                </p>
                
            </div>
        </div>
      <!-- Grid row -->
    </div>
    <!-- <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top"><i class="bi bi-arrow-up"></i></button> -->
    <button id="back-to-top" href="#" class="btn btn-light btn-floating back-to-top" type="button"><i class="bi bi-arrow-up"></i></button>
    
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="col">
             <p>© 2021 Medispark</p> 
            </div>
        </div>
    </div>
</section>
<script>
  $("#send").click (function () {
    var mail = $("#mail").val();
    if(mail == ''){
      swal({
        title: "Empty Field!",
        text: "Please type your email address",
        icon: "warning",
        button: "OK",
      });
    } else {
      swal({
        title: "Email Sent",
        icon: "success",
        button: "OK",
      });
    }
    
  });
</script>