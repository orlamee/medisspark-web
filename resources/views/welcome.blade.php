@extends('layouts.home')

@section('content')
<div class="container banner-section">
  <div class="row">
    <div class="col-md-6" data-aos="zoom-in-left" data-aos-duration="1000">
      <h1 class="banner-heading">Digital infrastructure<br>for <span class="color-text">healthcare</span></h1>
      <h6 class="pt-4 banner-text">Leading health companies trust MediSpark’s APIs and ecosystem to connect with their partners and customers.</h6>
      <div class="mt-5 mb-5">
        <form id="my-form" action="https://formspree.io/f/mbjwlqel" method="POST" class="row g-3 align-items-center desktop">
          <div class="col-7">
            <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
            <div class="input-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
            </div>
          </div>
          <div class="col-5">
            <button type="submit" id="my-form-button" class="btn get-started-btn">Get Started</button>
          </div>
          <p id="my-form-status"></p>
        </form>
        @include('layouts.mobile-view')
      </div>
    </div>
    <div class="col-md-6" data-aos="zoom-in-left" data-aos-duration="1000">
      <img src="/img/home-banner.gif" class="img-fluid large-width">
      <!-- <img src="/img/aboutgif.mp4" class="img-fluid" alt="Swift Medispark"> -->
    </div>
  </div>
</div>
<div class="container-fluid mt-2 mb-4">
  <img src="/img/divider.svg" class="bg" alt="Swift Medispark">
</div>
<div class="container clients-logo desktop" data-aos="slide-right" data-aos-duration="1000">
  <div class="row">
    <h2 class="font-weight-bold">Trusted by</h2>
  </div>
  <div class="row mt-2">
    <div class="col">
      <img src="/img/logo/54gene.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="col">
      <img src="/img/logo/curacel.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="col">
      <img src="/img/logo/cu.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="col">
      <img src="/img/logo/leadway.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="col">
      <img src="/img/logo/army.png" class="img-fluid" alt="Swift Medispark">
    </div>
  </div>
</div>
<!-- mobile view -->
<div class="container clients-logo mobile" data-aos="slide-right" data-aos-duration="1000">
  <div class="row">
    <h2 class="font-weight-bold">Trusted by</h2>
  </div>
  <div class="row mt-2">
    <div class="col-sm-3 col-6 mb-4">
      <img src="/img/logo/54gene.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="col-sm-3 col-6 mb-4">
      <img src="/img/logo/curacel.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="col-sm-3 col-6 mb-4">
      <img src="/img/logo/cu.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="col-sm-3 col-6 mb-4">
      <img src="/img/logo/leadway.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <!-- <div class="col-sm-3 col-6 mb-4">
      <img src="/img/logo/army.png" class="img-fluid" alt="Swift Medispark">
    </div> -->
  </div>
</div>
<div class="container-fluid about-section">
  <div class="row" data-aos="slide-left" data-aos-duration="1000">
    <div class="col-md-6 img-about">
      <img src="/img/about-img.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="col-md-6 text-about">
      <h1 class="font-weight-bolder about-heading">Powering the future of <span class="sub-text">African Healthcare</span></h1>
      <h6 class="pt-3 pb-3 banner-text">Our APIs & SaaS tools facilitate seamless transactions and enable distribution of healthcare services at scale.</h6>
      <a href="/contact#get-started" class="btn get-started-btn">Get Started</a>
    </div>
  </div>
</div>
<div class="container producttab-section" id="products" data-aos="slide-right" data-aos-duration="1000">
  <h1 class="font-weight-bolder about-heading mb-4">Products</h1>
  <div class="row mobile">
    <div id="product-slide" class="carousel slide" data-ride="carousel">
      <ol id="" class="carousel-indicators">
        <li data-target="#product-slide" data-slide-to="0" class="active bg-secondary"></li>
        <li data-target="#product-slide" data-slide-to="1" class="bg-secondary"></li>
        <li data-target="#product-slide" data-slide-to="2" class="bg-secondary"></li>
        <li data-target="#product-slide" data-slide-to="3" class="bg-secondary"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-12">
              <img src="/img/relay-new.png" class="img-fluid mb-2" alt="Medispark">
              <div class="parent">
                <div class="img">
                  <img src="/img/logo/relay.png" class="img-fluid" width="30px" alt="">
                </div>
                <div class="product-text">
                  <h3 class="heading heading-relay" style="color: #3cbab3!important;">Relay</h3>
                  <p class="tab-text">Connects Providers to Insurers For: Claim submission, Auto-vetting, faster payment.</p>
                </div>
              </div>
            </div>      
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-12">
              <img src="/img/refill-new.png" class="img-fluid mb-2" alt="Medispark">
              <div class="parent">
                <div class="img-fill">
                  <img src="/img/logo/refill.png" class="img-fluid" width="90px" alt="">
                </div>
                <div class="product-text">
                  <h3 class="heading heading-relay" style="color: #1b76ba!important;">Refill</h3>
                  <p class="tab-text">Connects Providers to Patients For:Medication refills, Virtual consultations.</p>
                </div>
              </div>
            </div>      
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-12">
              <img src="/img/refer-new.png" class="img-fluid mb-2" alt="Medispark">
              <div class="parent">
                <div class="img">
                  <img src="/img/logo/refer.png" class="img-fluid" width="30px" alt="">
                </div>
                <div class="product-text">
                  <h3 class="heading heading-relay" style="color: #3cbab3!important;">Refer</h3>
                  <p class="tab-text">Connects Providers to Other care providers For: Referral services, health record sharing.</p>
                </div>
              </div>
            </div>      
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-12">
              <img src="/img/recountt.png" class="img-fluid mb-2" alt="Medispark">
              <div class="parent">
                <div class="img">
                  <img src="/img/logo/recount.png" class="img-fluid" width="30px" alt="">
                </div>
                <div class="product-text">
                  <h3 class="heading heading-relay" style="color: #1b76ba!important;">Recount</h3>
                  <p class="tab-text">Connects Providers to Researchers For: Clinical trials, drug development research.</p>
                </div>
              </div>
            </div>      
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="row desktop">
    <div class="col-md-6">
      <div class="tabcontent" id="Relay">
        <img src="/img/relay-new.png" class="img-fluid" alt="Swift Medispark">
      </div>
      <div class="tabcontent" id="Refill">
        <img src="/img/refill-new.png" class="img-fluid" alt="Swift Medispark">
      </div>
      <div class="tabcontent" id="Refer">
        <img src="/img/refer-new.png" class="img-fluid" alt="Swift Medispark">
      </div>
      <div class="tabcontent" id="Recount">
        <img src="/img/recountt.png" class="img-fluid" alt="Swift Medispark">
      </div>
    </div>
    
    <div class="col-md-6 tab-section">
      <div class="tab">
        <button class="tablinks" onclick="openCard(event, 'Relay')" id="defaultOpen">
          <div class="parent">
            <div class="img">
              <img src="/img/logo/relay.png" class="img-fluid" width="30px" alt="">
            </div>
            <div class="product-text">
              <h3 class="heading heading-relay">Relay</h3>
              <p class="tab-text">Connects Providers to Insurers For: Claim submission, Auto-vetting, faster payment.</p>
            </div>
          </div>
        </button>
        <button class="tablinks" onclick="openCard(event, 'Refill')">
          <div class="parent">
            <div class="img-fill">
              <img src="/img/logo/refill.png" class="img-fluid" width="" alt="">
            </div>
            <div class="product-text">
              <h3 class="heading">Refill</h3>
              <p class="tab-text">Connects Providers to Patients For:Medication refills, Virtual consultations.</p>
            </div>
          </div>
        </button>
        <button class="tablinks" onclick="openCard(event, 'Refer')">
          <div class="parent">
            <div class="img">
              <img src="/img/logo/refer.png" class="img-fluid" width="30px" alt="">
            </div>
            <div class="product-text">
              <h3 class="heading">Refer</h3>
                <p class="tab-text">Connects Providers to Other care providers For: Referral services, health record sharing.</p>
            </div>
          </div>
        </button>
        <button class="tablinks" onclick="openCard(event, 'Recount')">
          <div class="parent animate__animated animate__slideInUp">
            <div class="img">
              <img src="/img/logo/recount.png" class="img-fluid" width="30px" alt="">
            </div>
            <div class="product-text">
              <h3 class="heading">Recount</h3>
              <p class="tab-text">Connects Providers to Researchers For: Clinical trials, drug development research.</p>
            </div>
          </div>
        </button>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid about-section br-30" data-aos="slide-up" data-aos-duration="1000">
  <div class="container">
    <h1 class="font-weight-bolder about-heading">How we’ve <span class="sub-text">performed</span> so far</h1>
    <div class="row pt-5 mobile-center">
      <div class="col-sm-3 col-12 mb-5">
        <img src="/img/transactions.png" class="img-fluid"  width="80px" alt="">
       <!-- <i class="bi bi-coin icons-clients"></i> -->
       <h3 class="icon-text pt-5">1.2M</h3>
       <h6 class="banner-text">Worth of transactions</h6>
      </div>
      <div class="col-sm-3 col-12 mb-5">
      <img src="/img/data.png" class="img-fluid"  width="80px" alt="">
       <!-- <i class="bi bi-clipboard-data icons-clients"></i> -->
       <h3 class="icon-text pt-5">680K+</h3>
       <h6 class="banner-text">Units of data processed</h6>
      </div>
      <div class="col-sm-3 col-12 mb-5">
      <img src="/img/globe.png" class="img-fluid"  width="160px" alt="">
       <!-- <i class="bi bi-globe icons-clients"></i> -->
       <h3 class="icon-text pt-5">10x</h3>
       <h6 class="banner-text">10x better distribution</h6>
      </div>
      <div class="col-sm-3 col-12 mb-5">
      <img src="/img/users.png" class="img-fluid"  width="80px" alt="">
       <!-- <i class="bi bi-people icons-clients"></i> -->
       <h3 class="icon-text pt-5">40,000</h3>
       <h6 class="banner-text">Manhours saved p/m</h6>
      </div>
    </div>
  </div>
</div>
<div class="container product-section">
  <h1 class="font-weight-bolder about-heading" data-aos="slide-right" data-aos-duration="1000">Here’s what our <span class="sub-text">customers</span><br>think</h1>
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6">
      <div class="testimonial-one" data-aos="slide-right">
        <div class="test-img">
         <img src="/img/testimonial-one.png" class="img-fluid" width="100px" alt="Medispark">
        </div>
        <h6 class="testimonial-text">“Our efforts to build Africa’s largest biobank rely on being able to gather genomic data on a large scale. MediSpark’s APIs enable us efficiently extract data from our partner facilities, saving thousands of man-hours as we scale operations globally.”</h6>
        <h6 class="font-weight-bold author">Abasi Ene-Obong, PhD</h6>
        <p class="text-muted company">CEO, 54gene</p>
      </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6">
      <div class="testimonial-two" data-aos="slide-left" data-aos-duration="1000">
        <div class="test-img">
         <img src="/img/testimonial-two.png" class="img-fluid" width="100px" alt="Medispark">
        </div>
        <h6 class="testimonial-text">“MediSpark’s infrastructure has significantly increased our capacity to distribute health insurance products for our HMO partners. Integration was fast and easy, transactions are seamless, uptime has been excellent.”</h6>
        <h6 class="font-weight-bold author">Henry Mascot</h6>
        <p class="text-muted company">Founder and CEO, Curacel</p>
      </div>
    </div>
  </div>
</div>

<div class="container awards-logo" data-aos="slide-right" data-aos-duration="1000">
  <div class="row">
    <h2 class="font-weight-bold">Certificates and compliance</h2>
  </div>
  <div class="row mt-2">
    <div class="col-sm-3 col-6 mb-4">
      <img src="/img/logo/hipaa.png" class="img-fluid award-logo" alt="Swift Medispark">
    </div>
    <div class="col-sm-3 col-6 mb-4">
      <img src="/img/logo/nitda.png" class="img-fluid award-logo" alt="Swift Medispark">
    </div>
    <div class="col-sm-3 col-6 mb-4">
      <img src="/img/logo/gdpr.png" class="img-fluid award-logo" alt="Swift Medispark">
    </div>
    <div class="col-sm-3 col-6 mb-4">
      <img src="/img/logo/cohsasa.png" class="img-fluid award-logo" alt="Swift Medispark">
    </div>
  </div>
</div>

<div class="container-fluid mt-4 mb-4">
  <img src="/img/footer-divider.png" class="bg" alt="Swift Medispark">
</div>
<footer class="text-left text-lg-start text-muted">
  @include('layouts.footer')
</footer>

<script>
function openCard(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  // AOS.init();
  AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

  });
</script>
<script>
    var form = document.getElementById("my-form");
    
    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("my-form-status");
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

<script>
   $('.carousel').carousel({
    interval: 5000,
    pause: "false"
  });
</script>
@endsection

