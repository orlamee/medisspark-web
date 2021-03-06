@include('layouts.home')

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <div class="about-jumbotron">
       <h1 class="font-weight-bolder about-heading">How can we help?</h1>
       <h6 class="spacing banner-text">Looking for tech solutions to grow your healthcare business? Speak<br>to someone at MediSpark today! Let’s start something great.</h6> 
       <a href="#contact" id="get-started"><i class="bi bi-arrow-down-circle arrow-down"></i></a>
      </div>
    </div>
  </div>
</div>
<div class="container contact-section" id="contact">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-6" data-aos="slide-right" data-aos-duration="1000">
     <h1 class="font-weight-bolder about-heading mb-5">Let’s talk</h1>
      <div class="flex-container spacing-contact">
        <i class="bi bi-envelope-check contact-icon"></i>
        <div class="contact-menu">
          <h6 class="title-list">info@swiftmedispark.com </h6>
        </div>
      </div>
      <div class="flex-container spacing-contact">
        <i class="bi bi-telephone-inbound contact-icon"></i>
        <div class="contact-menu">
          <h6 class="title-list">+234 708 432 8977</h6>
        </div>
      </div>
      <div class="flex-container spacing-contact">
        <i class="bi bi-pin-map contact-icon-three"></i>
        <div class="contact-menu">
          <h6 class="title-list">11 Ore Close, Off Babatunde St,<br>Surulere 101283, Lagos </h6>
          <hr>
          <h6 class="title-list">2055 Limestone Rd STE 200-C Wilmington,<br>DE 19808, United States </h6>
        </div>
      </div>
      <div class="flex-container spacing-contact">
        <i class="bi bi-calendar3 contact-icon"></i>
        <div class="contact-menu">
          <a href="https://calendly.com/talktomedispark/makeanenquiry" target="_blank" class="btn get-started-btn colored-btn">Schedule a meeting</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 text-center" data-aos="slide-left" data-aos-duration="1000">
      <div class="form-bg">
        <h3 class="contact-heading text-muted">Send us a message</h3>
        <h6 class="banner-text mb-3">We reply to all messages swiftly</h6>
        <form id="contactform" action="https://formspree.io/f/mdobkyrg" method="POST">
          <input type="hidden" data-form-email="true">
          <div class="form-group">
            <input type="text" class="form-control form-control-contact" name="name" placeholder="Name*" data-form-field="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control form-control-contact" name="email_address" required="" placeholder="Email*" data-form-field="Email">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control form-control-contact" name="phone" placeholder="Phone*" data-form-field="Phone">
          </div>
          <div class="form-group">
            <textarea class="form-control form-control-contact" name="message" placeholder="Message" rows="7" data-form-field="Message"></textarea>
          </div>
          <div>
            <button id="my-form-button" class="btn btn-block get-started-btn">Submit</button>
          </div>
          <p id="result"></p>
        </form>
      </div>
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
<script>
    var form = document.getElementById("contactform");
    
    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("result");
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
        // status.innerHTML = "Thank you! Someone from MediSpark will be in touch soon";
        form.reset()
      }).catch(error => {
        status.innerHTML = "Oops! There was a problem submitting your form"
      });
    }
    form.addEventListener("submit", handleSubmit)
</script>
