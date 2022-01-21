@include('layouts.home')

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <div class="about-jumbotron">
       <h1 class="font-weight-bolder about-heading">Empowering <span class="color-text">healthcare companies</span><br>to achieve more</h1>
       <h6 class="spacing banner-text about-subtitle">MediSpark is on a mission to power the next generation of healthcare services in Africa. Our APIs connect players across the health sector, enabling demand aggregation and effective distribution, with in-built compliance.</h6> 
       <a href="#about"><i class="bi bi-arrow-down-circle arrow-down"></i></a>
      </div>
    </div>
  </div>
</div>
<div class="container gallery desktop" id="about" data-aos="slide-up" data-aos-duration="1000">
  <div class="row">
    <div id="gallery" class="carousel slide" data-ride="carousel">
      <!-- <div class="controller">
        <a class="left carousel-control pr-3" href="#mycarousel" data-slide="prev"><span><img src="img/left.png" class="img-fluid" width="50" alt=""></span></a>
        <a class="right carousel-control" href="#mycarousel" data-slide="next"><span><img src="img/right.png" class="img-fluid" width="50" alt=""></span></a>
      </div> -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-sm-4 col-12 mb-3">
              <img src="/img/about-one.png" class="img-fluid mb-2" alt="Medispark">
            </div> 
            <div class="col-sm-4 col-12 mb-3">
              <img src="/img/about-two.png" class="img-fluid mb-2" alt="Medispark">
            </div>  
            <div class="col-sm-4 col-12 mb-3">
              <img src="/img/about-three.png" class="img-fluid mb-2" alt="Medispark">
            </div>     
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
          <div class="col-sm-4 col-12 mb-3">
              <img src="/img/about-four.png" class="img-fluid mb-2" alt="Medispark">
            </div> 
            <div class="col-sm-4 col-12 mb-3">
              <img src="/img/about-five.png" class="img-fluid mb-2" alt="Medispark">
            </div>  
            <div class="col-sm-4 col-12 mb-3">
              <img src="/img/about-six.png" class="img-fluid mb-2" alt="Medispark">
            </div>  
          </div>
        </div>
      </div>
      <div class="control">
        <a class="left carousel-control pr-3" href="#gallery" data-slide="prev"><span><img src="img/left.png" class="img-fluid" width="50" alt=""></span></a>
        <a class="right carousel-control" href="#gallery" data-slide="next"><span><img src="img/right.png" class="img-fluid" width="50" alt=""></span></a>
      </div>
    </div>
  </div>
</div>

<div class="container gallery mobile" id="about" data-aos="slide-up" data-aos-duration="1000">
  <div class="row">
    <div id="galleria" class="carousel slide" data-ride="carousel">
      <!-- <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active bg-secondary"></li>
        <li data-target="#carousel" data-slide-to="1" class="bg-secondary"></li>
        <li data-target="#carousel" data-slide-to="2" class="bg-secondary"></li>
      </ol> -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-sm-4 col-12 mb-3">
              <img src="/img/about-one.png" class="img-fluid mb-2" alt="Medispark">
            </div>      
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-sm-4 col-12 mb-3">
              <img src="/img/about-two.png" class="img-fluid mb-2" alt="Medispark">
            </div>   
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-sm-4 col-12 mb-3">
              <img src="/img/about-three.png" class="img-fluid mb-2" alt="Medispark">
            </div>   
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-sm-4 col-12 mb-3">
              <img src="/img/about-four.png" class="img-fluid mb-2" alt="Medispark">
            </div>   
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-sm-4 col-12 mb-3">
              <img src="/img/about-five.png" class="img-fluid mb-2" alt="Medispark">
            </div>   
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-sm-4 col-12 mb-3">
              <img src="/img/about-six.png" class="img-fluid mb-2" alt="Medispark">
            </div>   
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-sm-4 col-12 mb-3">
              <img src="/img/about-seven.png" class="img-fluid mb-2" alt="Medispark">
            </div>   
          </div>
        </div>
      </div>
      <div class="control-about">
        <a class="left carousel-control pr-3" href="#galleria" data-slide="prev"><span><img src="img/left.png" class="img-fluid" width="50" alt=""></span></a>
        <a class="right carousel-control" href="#galleria" data-slide="next"><span><img src="img/right.png" class="img-fluid" width="50" alt=""></span></a>
      </div>
    </div>
  </div>
</div>

<div class="container mb-5">
  <h1 class="font-weight-bolder about-heading" data-aos="slide-right">What we do</h1>
</div>
<div class="container-fluid about-section">
  <div class="row" data-aos="slide-left" data-aos-duration="1000">
    <div class="col-md-6 img-about animate__animated animate__slideInLeft animate__slow">
      <img src="/img/about-img.png" class="img-fluid" alt="Swift Medispark">
    </div>
    <div class="col-md-6 text-about">
      <h1 class="font-weight-bolder about-heading">Technology partner for <span class="sub-text">fintechs, insurtechs & healthtechs</span></h1>
      <h6 class="pt-3 pb-3 banner-text">MediSpark’s suite of APIs, SDKs, and white-labeled UIs, empowers founders to build great features into their products — distribution, claims, payments, prescription fulfilment, diagnostics, referrals, research, financing, telehealth, compliance, and more.</h6>
      <a href="/contact#get-started" class="btn get-started-btn">Get Started</a>
    </div>
  </div>
</div>
<div class="container blog-section desktop">
  <h1 class="font-weight-bolder about-heading" data-aos="slide-right" data-aos-duration="1000">Medispark in the news</h1>
  <div class="row pt-5" data-aos="slide-up" data-aos-duration="1000">
    <div id="blog" class="carousel slide" data-ride="carousel">
      <div class="controller">
        <a class="left carousel-control pr-3" href="#blog" data-slide="prev"><span><img src="img/left.png" class="img-fluid" width="50" alt=""></span></a>
        <a class="right carousel-control" href="#blog" data-slide="next"><span><img src="img/right.png" class="img-fluid" width="50" alt=""></span></a>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-sm-3 col-12 mb-3">
              <div class="card">
                <img src="/img/blog-two.png" class="img-fluid" alt="">
                <div class="card-body">
                  <h6 class="card-title-blog pt-2">How MediSpark is building Africa’s healthcare ecosystem</h6>
                  <p class="card-text pt-2 pb-2">MediSpark is the brainchild of Ugo Nwokoro and Gbenga Oyeniyi....</p>
                  <a href="https://disrupt-africa.com/2021/11/29/how-nigerias-medispark-is-piecing-together-an-african-healthcare-ecosystem/" target="_blank">Read More</a>
                  <img src="/img/blog-logo-one.png"  class="img-fluid float-right" width="110px" alt="">
                </div>
              </div>
            </div> 
            <div class="col-sm-3 col-12 mb-3">
              <div class="card">
                <img src="/img/blog-one.png" class="img-fluid" alt="">
                <div class="card-body">
                  <h6 class="card-title-blog pt-2">MediSpark joins Aidi Africa’s prestigious accelerator</h6>
                  <p class="card-text pt-2 pb-2">Aidi Africa, an African venture builder run by its portfolio manag...</p>
                  <a href="https://techpoint.africa/2021/09/06/aidi-africa-partners-with-aws-to-accelerate-african-businesses/" target="_blank">Read More</a>
                  <img src="/img/tp.png"  class="img-fluid float-right" width="110px" alt="">
                </div>
              </div>
            </div>  
            <div class="col-sm-3 col-12 mb-3">
              <div class="card">
                <img src="/img/blog-three.png" class="img-fluid" alt="">
                <div class="card-body">
                  <h6 class="card-title-blog pt-2">MediSpark wins 1st prize at KOPETECH awards</h6>
                  <p class="card-text pt-2 pb-2">The maiden edition of KOPETECH, an annual programme for empow...</p>
                  <a href="https://guardian.ng/saturday-magazine/empowerment-comes-for-young-tech-entrepreneurs/" target="_blank">Read More</a>
                  <img src="/img/theguardian.png"  class="img-fluid float-right" width="110px" alt="">
                </div>
              </div>
            </div>  
            <div class="col-sm-3 col-12 mb-3">
              <div class="card">
                <img src="/img/blog-four.png" class="img-fluid" alt="">
                <div class="card-body">
                  <h6 class="card-title-blog pt-2">MediSpark wins Utopia’s Urban Innovation Challenge</h6>
                  <p class="card-text pt-2 pb-2">Utopia has announced the winners of the first-ever Lagos Urban Inn...</p>
                  <a href="https://ventureburn.com/2020/08/winners-of-lagos-urban-innovation-challenge-announced/" target="_blank">Read More</a>
                  <img src="/img/venture.png"  class="img-fluid float-right" width="110px" alt="">
                </div>
              </div>
            </div>   
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-sm-3 col-12 mb-3">
              <div class="card">
                <img src="/img/blog-five.png" class="img-fluid" alt="">
                <div class="card-body">
                  <h6 class="card-title-blog pt-2">MediSpark CEO as special guest on Nairametrics show</h6>
                  <p class="card-text pt-2 pb-2">Business Half Hour (BHH Podcast) is a weekly podcast targeted at...</p>
                  <a href="https://nairametrics.com/2019/05/13/bhh-podcast-how-technology-can-provide-opportunities-for-small-business-in-the-healthcare-sector-part-2/" target="_blank">Read More</a>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container blog-section mobile">
  <h1 class="font-weight-bolder about-heading" data-aos="slide-right" data-aos-duration="1000">Medispark in the news</h1>
  <div class="row pt-5" data-aos="slide-up" data-aos-duration="1000">
    <div id="mobilecarousel" class="carousel slide" data-ride="carousel">
      <!-- <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active bg-secondary"></li>
        <li data-target="#carousel" data-slide-to="1" class="bg-secondary"></li>
        <li data-target="#carousel" data-slide-to="2" class="bg-secondary"></li>
      </ol> -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-sm-3 col-12 mb-3">
              <div class="card">
                <img src="/img/blog-two.png" class="img-fluid" alt="">
                <div class="card-body">
                  <h6 class="card-title-blog pt-2">How MediSpark is building Africa’s healthcare ecosystem</h6>
                  <p class="card-text pt-2 pb-2">MediSpark is the brainchild of Ugo Nwokoro and Gbenga Oyeniyi....</p>
                  <a href="https://disrupt-africa.com/2021/11/29/how-nigerias-medispark-is-piecing-together-an-african-healthcare-ecosystem/" target="_blank">Read More</a>
                  <img src="/img/blog-logo-one.png"  class="img-fluid float-right" width="110px" alt="">
                </div>
              </div>
            </div>   
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-sm-3 col-12 mb-3">
              <div class="card">
                <img src="/img/blog-one.png" class="img-fluid" alt="">
                <div class="card-body">
                  <h6 class="card-title-blog pt-2">MediSpark joins Aidi Africa’s prestigious accelerator</h6>
                  <p class="card-text pt-2 pb-2">Aidi Africa, an African venture builder run by its portfolio manag...</p>
                  <a href="https://techpoint.africa/2021/09/06/aidi-africa-partners-with-aws-to-accelerate-african-businesses/" target="_blank">Read More</a>
                  <img src="/img/tp.png"  class="img-fluid float-right" width="110px" alt="">
                </div>
              </div>
            </div>    
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-sm-3 col-12 mb-3">
              <div class="card">
                <img src="/img/blog-three.png" class="img-fluid" alt="">
                <div class="card-body">
                  <h6 class="card-title-blog pt-2">MediSpark wins 1st prize at KOPETECH awards</h6>
                  <p class="card-text pt-2 pb-2">The maiden edition of KOPETECH, an annual programme for empow...</p>
                  <a href="https://guardian.ng/saturday-magazine/empowerment-comes-for-young-tech-entrepreneurs/" target="_blank">Read More</a>
                  <img src="/img/theguardian.png"  class="img-fluid float-right" width="110px" alt="">
                </div>
              </div>
            </div>  
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-sm-3 col-12 mb-3">
              <div class="card">
                <img src="/img/blog-four.png" class="img-fluid" alt="">
                <div class="card-body">
                  <h6 class="card-title-blog pt-2">MediSpark wins Utopia’s Urban Innovation Challenge</h6>
                  <p class="card-text pt-2 pb-2">Utopia has announced the winners of the first-ever Lagos Urban Inn...</p>
                  <a href="https://ventureburn.com/2020/08/winners-of-lagos-urban-innovation-challenge-announced/" target="_blank">Read More</a>
                  <img src="/img/venture.png"  class="img-fluid float-right" width="110px" alt="">
                </div>
              </div>
            </div>     
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-sm-3 col-12 mb-3">
              <div class="card">
                <img src="/img/blog-five.png" class="img-fluid" alt="">
                <div class="card-body">
                  <h6 class="card-title-blog pt-2">MediSpark CEO as special guest on Nairametrics show</h6>
                  <p class="card-text pt-2 pb-2">Business Half Hour (BHH Podcast) is a weekly podcast targeted at...</p>
                  <a href="https://nairametrics.com/2019/05/13/bhh-podcast-how-technology-can-provide-opportunities-for-small-business-in-the-healthcare-sector-part-2/" target="_blank">Read More</a>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
      <div class="control-mobile">
        <a class="left carousel-control pr-3" href="#mobilecarousel" data-slide="prev"><span><img src="img/left.png" class="img-fluid" width="50" alt=""></span></a>
        <a class="right carousel-control" href="#mobilecarousel" data-slide="next"><span><img src="img/right.png" class="img-fluid" width="50" alt=""></span></a>
      </div>
    </div>
  </div>
</div>
<div class="container product-section" data-aos="zoom-in" data-aos-duration="1000">
 <h1 class="font-weight-bolder about-heading">Our Values</h1>
  <div class="row mt-5">
    <div class="col-md-4">
      <div class="values mb-2">
        <h6 class="card-title">Patients come first</h6>
        <p class="banner-text">Your patients are our patients. Ensuring our goals are aligned helps us build the best healthcare experience possible.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="values-two mb-2">
        <h6 class="card-title">Breaking barriers</h6>
        <p class="banner-text">We understand that speed is your competitive advantage in today’s market. Our products expand your possibilities so you can build the best features in the fastest time.</p>

      </div>
    </div>
    <div class="col-md-4">
      <div class="values-three mb-2">
        <h6 class="card-title">Reliability</h6>
        <p class="banner-text">We are people and infrastructure you can trust. To deliver this promise, we build with compliance, security, and integrity in mind.</p>
      </div>
    </div>
  </div>
</div>
<div class="container" data-aos="zoom-in-right" data-aos-duration="1000">
  <h1 class="font-weight-bolder about-heading">Care to join us?</h1>
  <div class="row">
    <div class="col-md-6 pt-4">
      <h6 class="pb-3 banner-text">We are a passionate and creative team bound by a shared goal - to build technology that improves healthcare for billions of Africans.</h6>
      <a href="https://swiftmedispark.freshteam.com/jobs" target="_blank" class="btn get-started-btn">See Openings</a>
    </div>
  </div>
</div>
<div class="container img-footer" data-aos="zoom-in-left" data-aos-duration="1000">
  <img src="/img/about-footer.png" class="img-fluid" alt="medispark">
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