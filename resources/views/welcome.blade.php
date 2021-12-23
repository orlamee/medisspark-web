@extends('layouts.home')

@section('content')
<div class="container banner-section">
  <div class="row">
    <div class="col-md-6 animate__animated animate__bounceInLeft animate__slow">
      <h1 class="font-weight-bolder about-heading">Digital infrastructure<br>for <span class="color-text">healthcare</span></h1>
      <h6 class="pt-4 banner-text">Leading health companies trust MediSpark’s APIs and ecosystem to connect with their partners and customers.</h6>
      <div class="mt-5 mb-5">
        <form class="row g-3 align-items-center">
          <div class="col-7">
            <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
            <div class="input-group">
              <input type="email" class="form-control" id="email" placeholder="Enter your email address" required>
            </div>
          </div>
          <div class="col-5">
            <button type="button" id="submit" class="btn get-started-btn">Get Started</button>
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-6 animate__animated animate__slideInRight">
      <img src="/img/banner.gif" class="img-fluid">
      <!-- <img src="/img/aboutgif.mp4" class="img-fluid" alt="Swift Medispark"> -->
    </div>
  </div>
</div>
<div class="container-fluid mt-2 mb-4">
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
      <!-- <img src="/img/about.png" class="img-fluid" alt="Swift Medispark"> -->
      <img src="/img/about.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="col-md-6 text-about">
      <h1 class="font-weight-bolder about-heading">Powering the future of <span class="sub-text">African Healthcare</span></h1>
      <h6 class="pt-3 pb-3 banner-text">Our APIs & SaaS tools facilitate seamless transactions and enable distribution of healthcare services at scale.</h6>
      <a href="#" class="btn get-started-btn">Get Started</a>
    </div>
  </div>
</div>
<div class="container producttab-section" id="products">
  <h1 class="font-weight-bolder about-heading mb-4">Products</h1>
  <div class="row">
    <div class="col-md-6">
    <div class="tabcontent" id="Relay">
      <img src="/img/relay-one.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="tabcontent" id="Refill">
      <img src="/img/refill-one.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="tabcontent" id="Refer">
      <img src="/img/refer-one.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="tabcontent" id="Recount">
      <img src="/img/recount-one.png" class="img-fluid" alt="Swift Medispark">
    </div>
    </div>
    
    <div class="col-md-6 tab-section">
      <div class="tab">
        <button class="tablinks" onclick="openCard(event, 'Relay')" id="defaultOpen">
          <div class="parent">
            <div class="img">
              <img src="/img/relay-logo.png" class="img-fluid" width="30px" alt="">
            </div>
            <div class="product-text">
              <h3 class="heading">Relay</h3>
              <p class="tab-text">Connects Providers to Insurers For: Claim submission, Auto-vetting, faster payment.</p>
            </div>
          </div>
        </button>
        <button class="tablinks" onclick="openCard(event, 'Refill')">
          <div class="parent">
            <div class="img">
              <img src="/img/refill.png" class="img-fluid" width="18px" alt="">
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
              <img src="/img/refer.png" class="img-fluid" width="30px" alt="">
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
              <img src="/img/recount.png" class="img-fluid" width="30px" alt="">
            </div>
            <div class="product-text">
              <h3 class="heading">Recount</h3>
              <p class="tab-text">Connects Providers to Researchers For: Clinical trials, drug development research</p>
            </div>
          </div>
        </button>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid about-section br-30">
  <div class="container">
    <h1 class="font-weight-bolder about-heading">How we’ve <span class="sub-text">performed</span> so far</h1>
    <div class="row pt-5">
      <div class="col mb-4">
        <img src="/img/transactions.png" class="img-fluid"  width="80px" alt="">
       <!-- <i class="bi bi-coin icons-clients"></i> -->
       <h3 class="icon-text pt-5">1.2M</h3>
       <h6 class="banner-text">Worth of transactions</h6>
      </div>
      <div class="col mb-4">
      <img src="/img/data.png" class="img-fluid"  width="80px" alt="">
       <!-- <i class="bi bi-clipboard-data icons-clients"></i> -->
       <h3 class="icon-text pt-5">680K+</h3>
       <h6 class="banner-text">Units of data processed</h6>
      </div>
      <div class="col mb-4">
      <img src="/img/globe.png" class="img-fluid"  width="160px" alt="">
       <!-- <i class="bi bi-globe icons-clients"></i> -->
       <h3 class="icon-text pt-5">10x</h3>
       <h6 class="banner-text">10x better distribution</h6>
      </div>
      <div class="col mb-4">
      <img src="/img/users.png" class="img-fluid"  width="80px" alt="">
       <!-- <i class="bi bi-people icons-clients"></i> -->
       <h3 class="icon-text pt-5">40,000</h3>
       <h6 class="banner-text">Manhours saved p/m</h6>
      </div>
    </div>
  </div>
</div>
<div class="container product-section">
  <h1 class="font-weight-bolder about-heading">Here’s what our <span class="sub-text">customers</span><br>think</h1>
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6">
      <div class="testimonial-one animate__animated animate__slideInLeft animate__slow">
        <div class="test-img">
         <img src="/img/testimonial-1.png" class="img-fluid" width="100px" alt="Medispark">
        </div>
        <h6 class="testimonial-text">“We were looking to accelerate our dev efforts and access new talent. With Teamway we got all that plus a ton of flexibility for a good price”.</h6>
        <h6 class="font-weight-bold author">Wale Osinaike</h6>
        <p class="text-muted company">Founder, Hive Hospitals</p>
      </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6">
      <div class="testimonial-two animate__animated animate__slideInRight animate__slow">
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
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active bg-secondary"></li>
        <li data-target="#carousel" data-slide-to="1" class="bg-secondary"></li>
        <li data-target="#carousel" data-slide-to="2" class="bg-secondary"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md-3 mb-3">
              <div class="card">
                <img src="/img/blog-one.png" class="img-fluid" alt="">
                <div class="card-body">
                  <h6 class="card-title-blog pt-2">The future of Medicine in Africa and beyond</h6>
                  <p class="card-text pt-2 pb-2">“We were looking to accelerate our dev efforts looking to add to.....</p>
                  <a href="#">Read More</a>
                </div>
              </div>
            </div> 
            <div class="col-md-3 mb-3">
              <div class="card">
                <img src="/img/blog-two.png" class="img-fluid" alt="">
                <div class="card-body">
                  <h6 class="card-title-blog pt-2">The future of Medicine in Africa and beyond</h6>
                  <p class="card-text pt-2 pb-2">“We were looking to accelerate our dev efforts looking to add to.....</p>
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>  
            <div class="col-md-3 mb-3">
              <div class="card">
                <img src="/img/blog-three.png" class="img-fluid" alt="">
                <div class="card-body">
                  <h6 class="card-title-blog pt-2">The future of Medicine in Africa and beyond</h6>
                  <p class="card-text pt-2 pb-2">“We were looking to accelerate our dev efforts looking to add to.....</p>
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>  
            <div class="col-md-3 mb-3">
              <div class="card">
                <img src="/img/blog-four.png" class="img-fluid" alt="">
                <div class="card-body">
                  <h6 class="card-title-blog pt-2">The future of Medicine in Africa and beyond</h6>
                  <p class="card-text pt-2 pb-2">“We were looking to accelerate our dev efforts looking to add to.....</p>
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>   
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-3 mb-3">
              <div class="card">
                <img src="/img/blog-one.png" class="img-fluid" alt="">
                <div class="card-body">
                  <h6 class="card-title-blog pt-2">The future of Medicine in Africa and beyond</h6>
                  <p class="card-text pt-2 pb-2">“We were looking to accelerate our dev efforts looking to add to.....</p>
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card">
                <img src="/img/blog-two.png" class="img-fluid" alt="">
                <div class="card-body">
                  <h6 class="card-title-blog pt-2">The future of Medicine in Africa and beyond</h6>
                  <p class="card-text pt-2 pb-2">“We were looking to accelerate our dev efforts looking to add to.....</p>
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card">
                <img src="/img/blog-three.png" class="img-fluid" alt="">
                <div class="card-body">
                  <h6 class="card-title-blog pt-2">The future of Medicine in Africa and beyond</h6>
                  <p class="card-text pt-2 pb-2">“We were looking to accelerate our dev efforts looking to add to.....</p>
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card">
                <img src="/img/blog-four.png" class="img-fluid" alt="">
                <div class="card-body">
                  <h6 class="card-title-blog pt-2">The future of Medicine in Africa and beyond</h6>
                  <p class="card-text pt-2 pb-2">“We were looking to accelerate our dev efforts looking to add to.....</p>
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>        
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container awards-logo animate__animated animate__slideInLeft animate__slow">
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

<script>
  $("#submit").click (function () {
    var email = $("#email").val();
    if(email == ''){
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
@endsection

