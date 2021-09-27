@extends('includes.head')
@section('title', 'Login Page')
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
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
  </header>

  <!-- ===================================== -->

  <div id="contact-us" class="space-between-blocks border-top border-bottom">
    <div class="container">
      <div class="row">
       
        <div class="col-lg-3">
		</div>
		
		<div class="col-lg-6">
           
		 <form method="POST" action="{{ route('login') }}" class="contact-form text-center">
            @csrf
            <x-auth-validation-errors class="mb-4" :errors="$errors" />


            <div class="contact-form__header mb-5" style="color:black;">
              <h6 class="contact-form__title mb-3">Please Login</h6>
              {{-- <p class="contact-form__paragraph mb-0 mx-auto">
               L
              </p> --}}
            </div>
            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            <input type="email" class="contact-form__input" placeholder="Email"  name="email" :value="old('email')" required autofocus>

            <input type="password" class="contact-form__input" placeholder="Password" name="password" required autocomplete="current-password">
            
            <a style="text-align: right;text-decoration: none;" href="{{ route('password.request') }}"><p>Forgot password?</p></a>
            <button class="btn btn-primary w-40">SUBMIT</button>
          </form>
		</div>
			<div class="col-lg-3">
			</div>
      </div>
    </div>
  </div>
  

  <!-- =================================== -->
@include('includes/footer');