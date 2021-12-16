@extends('layouts.nav')

@section('banner')
<div class="container">
    <div class="row banner-section">
        <div class="col-md-6">
          <h1 class="font-weight-bolder about-heading animate__animated animate__slideInDown animate__slow">Digital infrastructure<br>for <span class="color-text">healthcare</span></h1>
          <!-- <img src="/img/medispark-headline.svg" class="img-fluid" alt="Swift Medispark"> -->
          <h6 class="pt-5">Leading health companies trust MediSpark’s APIs and ecosystem to connect with their partners and customers.</h6>
          <div class="mt-4 mb-4">
            <form class="row row-cols-lg-auto g-3 align-items-center">
              <div class="col-7">
                  <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                  <div class="input-group">
                    <input type="email" class="form-control" id="inlineFormInputGroupUsername" placeholder="Enter your email address" required>
                  </div>
              </div>
              <div class="col-5">
                  <button type="submit" class="btn get-started-btn">Get Started</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 animate__animated animate__slideInRight">
           <img src="/img/banner.svg" class="img-fluid" alt="Swift Medispark">
        </div>
    </div>
</div>
<div class="container-fluid mt-4 mb-4">
  <img src="/img/divider.svg" class="bg" alt="Swift Medispark">
</div>
<div class="container clients-logo animate__animated animate__slideInLeft animate__slow">
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
<div class="container-fluid about-section">
  <div class="row">
    <div class="col-md-6 img-about animate__animated animate__slideInLeft animate__slow">
      <img src="/img/about.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="col-md-6 text-about">
      <h1 class="font-weight-bolder about-heading">Powering the future<br>of <span class="sub-text">African Health</span></h1>
      <h6 class="pt-3">Our APIs & SaaS tools facilitate seamless transactions and enable health data transfers at scale.</h6>
      <h6 class="pb-3">+ Interfaces (inc EMR), API code.</h6>
      <a href="#" class="btn get-started-btn">Get Started</a>
    </div>
  </div>
</div>
<div class="container product-section">
  <h1 class="font-weight-bolder about-heading">Products</h1>
  <div class="row">
    <div class="col-md-6">
      <img src="/img/relay-img.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="col-md-6">
      <div class="parent animate__animated animate__slideInUp">
        <div class="img">
          <img src="/img/relay.jpg" class="img-fluid" width="" alt="">
        </div>
        <div class="product-text">
          <h3 class="heading">Relay</h3>
          <p>Connects Providers to Insurers For: Claim submission, Auto-vetting, faster payment.</p>
        </div>
      </div>
      <div class="parent animate__animated animate__slideInUp">
        <div class="img">
          <img src="/img/refill.jpg" class="img-fluid" width="" alt="">
        </div>
        <div class="product-text">
          <h3 class="heading text-muted">Refill</h3>
          <p>Connects Providers to Patients For:Medication refills, Virtual consultations.</p>
        </div>
      </div>
      <div class="parent animate__animated animate__slideInUp">
        <div class="img">
          <img src="/img/relay.jpg" class="img-fluid" width="" alt="">
        </div>
        <div class="product-text">
          <h3 class="heading text-muted">Refer</h3>
          <p>Connects Providers to Other care providers For: Referral services, health record sharing.</p>
        </div>
      </div>
      <div class="parent animate__animated animate__slideInUp">
        <div class="img">
          <img src="/img/relay.jpg" class="img-fluid" width="" alt="">
        </div>
        <div class="product-text">
          <h3 class="heading text-muted">Recount</h3>
          <p>Connects Providers to Researchers For: Clinical trials, drug development research.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid about-section">
  <div class="container">
    <h1 class="font-weight-bolder about-heading">How we’ve <span class="sub-text">performed</span> so far</h1>
    <div class="row pt-5">
      <div class="col">
       <i class="bi bi-coin icons-clients"></i>
       <h3 class="icon-text">1M</h3>
       <h6>Worth of transactions</h6>
      </div>
      <div class="col">
       <i class="bi bi-people icons-clients"></i>
       <h3 class="icon-text">40,000</h3>
       <h6>Manhours saved p/m</h6>
      </div>
      <div class="col">
       <i class="bi bi-globe icons-clients"></i>
       <h3 class="icon-text">10x</h3>
       <h6>10x better distribution</h6>
      </div>
      <div class="col">
       <i class="bi bi-clock icons-clients"></i>
       <h3 class="icon-text">24/7</h3>
       <h6>Always-on Support</h6>
      </div>
    </div>
  </div>
</div>
<div class="container product-section">
  <h1 class="font-weight-bolder about-heading">Here’s what our <span class="sub-text">customers</span><br>think</h1>
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6">
      <div class="testimonial-one">
        <div class="test-img">
         <img src="/img/testimonial-1.png" class="img-fluid" width="100px" alt="Medispark">
        </div>
        <h6 class="testimonial-text">“We were looking to accelerate our dev efforts and access new talent. With Teamway we got all that plus a ton of flexibility for a good price”.</h6>
        <h6 class="font-weight-bold author">Wale Osinaike</h6>
        <p class="text-muted company">Founder, Hive Hospitals</p>
      </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6">
      <div class="testimonial-two">
        <div class="test-img">
         <img src="/img/testimonial-2.png" class="img-fluid" width="100px" alt="Medispark">
        </div>
        <h6 class="testimonial-text">“We were looking to accelerate our dev efforts and access new talent. With Teamway we got all that plus a ton of flexibility for a good price”.</h6>
        <h6 class="font-weight-bold author">Makaile Agur</h6>
        <p class="text-muted company">Co-founder, Insidious Health</p>
      </div>
    </div>
  </div>
</div>
<div class="container blog-section">
  <h1 class="font-weight-bolder about-heading">Medispark in the news</h1>
  <div class="row pt-5">
    <div class="col-md-3 mb-3">
      <div class="card">
        <img src="/img/blog-one.png" class="img-fluid" alt="">
        <div class="card-body">
          <h6 class="card-title pt-2">The future of Medicine in Africa and beyond</h6>
          <p class="card-text pt-2 pb-2">“We were looking to accelerate our dev efforts ooking to add to.....</p>
          <a href="#">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <div class="card">
        <img src="/img/blog-two.png" class="img-fluid" alt="">
        <div class="card-body">
          <h6 class="card-title pt-2">The future of Medicine in Africa and beyond</h6>
          <p class="card-text pt-2 pb-2">“We were looking to accelerate our dev efforts ooking to add to.....</p>
          <a href="#">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <div class="card">
        <img src="/img/blog-three.png" class="img-fluid" alt="">
        <div class="card-body">
          <h6 class="card-title pt-2">The future of Medicine in Africa and beyond</h6>
          <p class="card-text pt-2 pb-2">“We were looking to accelerate our dev efforts ooking to add to.....</p>
          <a href="#">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <div class="card">
        <img src="/img/blog-four.png" class="img-fluid" alt="">
        <div class="card-body">
          <h6 class="card-title pt-2">The future of Medicine in Africa and beyond</h6>
          <p class="card-text pt-2 pb-2">“We were looking to accelerate our dev efforts ooking to add to.....</p>
          <a href="#">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container awards-logo animate__animated animate__slideInLeft animate__slow">
  <div class="row">
    <h2 class="font-weight-bold">Awards and certifications</h2>
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
@endsection