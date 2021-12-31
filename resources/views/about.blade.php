@include('layouts.home')

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <div class="about-jumbotron">
       <h1 class="font-weight-bolder about-heading">Digital infrastructure<br>for <span class="color-text">healthcare</span></h1>
       <h6 class="spacing banner-text">Leading health companies trust MediSpark’s APIs and <br>ecosystem to connect with their partners and customers.</h6> 
       <a href="#about"><i class="bi bi-arrow-down-circle arrow-down"></i></a>
      </div>
    </div>
  </div>
</div>
<div class="container gallery" id="about" data-aos="slide-up" data-aos-duration="1000">
  <div class="row">
    <div class="col-md-4">
      <img src="/img/about-one.png" class="img-fluid mb-2" alt="Medispark">
    </div>
    <div class="col-md-4">
      <img src="/img/about-two.png" class="img-fluid mb-2" alt="Medispark">
    </div>
    <div class="col-md-4">
      <img src="/img/about-three.png" class="img-fluid mb-2" alt="Medispark">
    </div>
  </div>
</div>
<div class="container mb-5">
  <h1 class="font-weight-bolder about-heading" data-aos="slide-right">What we do</h1>
</div>
<div class="container-fluid about-section">
  <div class="row" data-aos="slide-left" data-aos-duration="1000">
    <div class="col-md-6 img-about animate__animated animate__slideInLeft animate__slow">
      <img src="/img/about.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="col-md-6 text-about">
      <h1 class="font-weight-bolder about-heading">Powering the future<br>of <span class="sub-text">African Healthcare</span></h1>
      <h6 class="pt-3 pb-3 banner-text">Our APIs & SaaS tools facilitate seamless transactions and enable distribution of healthcare services at scale.</h6>
      <a href="#" class="btn get-started-btn">Get Started</a>
    </div>
  </div>
</div>
<div class="container product-section" data-aos="zoom-in" data-aos-duration="1000">
 <h1 class="font-weight-bolder about-heading">Our Values</h1>
  <div class="row mt-5">
    <div class="col-md-4">
      <div class="values mb-2">
        <h6 class="card-title">Integrity</h6>
        <p class="banner-text">Our APIs & SaaS tools facilitate seamless transactions and enable health data transfers at scale.<br>+ Interfaces (inc EMR), API code.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="values-two mb-2">
        <h6 class="card-title">Integrity</h6>
        <p class="banner-text">Our APIs & SaaS tools facilitate seamless transactions and enable health data transfers at scale.<br>+ Interfaces (inc EMR), API code.</p>

      </div>
    </div>
    <div class="col-md-4">
      <div class="values-three mb-2">
        <h6 class="card-title">Customer-Focused</h6>
        <p class="banner-text">Our APIs & SaaS tools facilitate seamless transactions and enable health data transfers at scale.<br>+ Interfaces (inc EMR), API code.</p>
      </div>
    </div>
  </div>
</div>
<div class="container" data-aos="zoom-in-right" data-aos-duration="1000">
  <h1 class="font-weight-bolder about-heading">Care to join us?</h1>
  <div class="row">
    <div class="col-md-6 pt-4">
      <h6 class="pb-3 banner-text">Our APIs & SaaS tools facilitate seamless transactions and enable health data transfers at scale.</h6>
      <a href="#" class="btn get-started-btn">See Openings</a>
    </div>
  </div>
</div>
<div class="container img-footer" data-aos="zoom-in-left" data-aos-duration="1000">
  <img src="/img/about-footer.png" class="img-fluid" alt="medispark">
</div>
<div class="container awards-logo" data-aos="slide-right" data-aos-duration="1000">
  <div class="row">
    <h2 class="font-weight-bold">Certificate and compliance</h2>
  </div>
  <div class="row mt-2">
    <div class="col">
      <img src="/img/logo/urac.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="col">
      <img src="/img/logo/legit.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="col">
      <img src="/img/logo/nabp.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="col">
      <img src="/img/logo/nyu.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="col">
      <img src="/img/logo/sas.png" class="img-fluid" alt="Swift Medispark">
    </div>
  </div>
</div>
<div class="container-fluid mt-4 mb-4">
  <img src="/img/footer-divider.png" class="bg" alt="Swift Medispark">
</div>
<footer class="text-left text-lg-start text-muted">
  @include('layouts.footer')
</footer>
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