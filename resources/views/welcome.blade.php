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
        <h2 class="font-weight-bold"">Trusted by</h2>
    </div>
    <div class="row mt-2">
        <div class="col">
          <img src="/img/54gene.png" class="img-fluid" alt="Swift Medispark">
        </div>
        <div class="col">
          <img src="/img/curacel.png" class="img-fluid" alt="Swift Medispark">
        </div>
        <div class="col">
          <img src="/img/cu.png" class="img-fluid" alt="Swift Medispark">
        </div>
        <div class="col">
          <img src="/img/leadway.png" class="img-fluid" alt="Swift Medispark">
        </div>
        <div class="col">
          <img src="/img/army.png" class="img-fluid" alt="Swift Medispark">
        </div>
    </div>
</div>
<div class="container-fluid about-section">
    <div class="row">
        <div class="col-md-6 img-about">
            <img src="/img/about.svg" class="img-fluid" alt="">
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
    <div class="row">
        <div class="col">
          <h1 class="font-weight-bolder about-heading">Products</h1>
        </div>
    </div>
</div>
@endsection