@include('layouts.home')

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <div class="about-jumbotron">
       <h1 class="font-weight-bolder about-heading">Contact Us</h1>
       <h6 class="spacing banner-text">Leading health companies trust MediSpark’s APIs and <br>ecosystem to connect with their partners and customers.</h6> 
       <a href="#contact"><i class="bi bi-arrow-down-circle arrow-down"></i></a>
      </div>
    </div>
  </div>
</div>
<div class="container contact-section" id="contact">
  <div class="row">
    <div class="col-md-7">
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
          <a href="#" class="btn get-started-btn colored-btn">Schedule a call</a>
        </div>
      </div>
      <div class="flex-container spacing-contact">
        <i class="bi bi-pin-map contact-icon-three"></i>
        <div class="contact-menu">
          <h6 class="title-list">11 Ore Close, Off Babatunde St,<br>Surulere 101283, Lagos </h6>
          <hr>
        </div>
      </div>
    </div>
    <div class="col-md-5 text-center">
      <div class="form-bg">
        <h3 class="contact-heading text-muted">Send us a message</h3>
        <h6 class="banner-text mb-3">We reply to all messages swiftly</h6>
        <form method="post" data-form-title="CONTACT US">
          <input type="hidden" data-form-email="true">
          <div class="form-group">
            <input type="text" class="form-control form-control-contact" name="name" required="" placeholder="Name*" data-form-field="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control form-control-contact" name="email" required="" placeholder="Email*" data-form-field="Email">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control form-control-contact" name="phone" placeholder="Phone*" data-form-field="Phone">
          </div>
          <div class="form-group">
            <textarea class="form-control form-control-contact" name="message" placeholder="Message" rows="7" data-form-field="Message"></textarea>
          </div>
          <div>
            <button type="submit" class="btn btn-block get-started-btn">Submit</button>
          </div>
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
