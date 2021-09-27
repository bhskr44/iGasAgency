@extends('includes.head')
@section('title', 'HomePage Itanagar Gas Agency')

<body>

    <!--Offer Alert ================================ -->
     <div class="offer-alert">
       <div class="offer-alert__container container">
         <span>Book Gas by just giving a miscall at +91-9999 99999</span> <a href="#" class="offer-alert__btn">Call Now</a>
       </div>
     </div>
    
  <!--Hero ====================================== -->
  <header class="hero container-fluid border-bottom">
   @include('includes/nav')
    <div class="hero__content container mx-auto">
      <div class="row px-0 mx-0 align-items-center">
        <div class="col-lg-6 px-0">
          <h1 class="hero__title mb-3">
            CALL<span class="highlight"> +91-999999999 </span> TO BOOK GAS
          </h1>
          <p class="hero__paragraph mb-5">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's
            standard
          </p>
          <div class="hero__btns-container">
            <a class="hero__btn btn btn-primary mb-2 mb-lg-0" href="#">
              Call Now
            </a>
            <a class="hero__btn btn btn-secondary mx-lg-3" href="#">
                Get Our App
            </a>
          </div>
        </div>
        <div class="col-lg-5 mt-5 mt-lg-0 mx-0">
          <div class="hero__img-container">
            <img src="assets/imgs/img-1.png" class="hero__img w-100">
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ===================================== -->

  

  <!-- =================================== -->
@include('includes/footer');