<nav class="hero-nav container px-4 px-lg-0 mx-auto">
    <ul class="nav w-100 list-unstyled align-items-center p-0">
      <li class="hero-nav__item">
        <a href="/"><img class="hero-nav__logo" src="assets/imgs/logo.svg"></a>
      </li>
      <li id="hero-menu" class="flex-grow-1 hero__nav-list hero__nav-list--mobile-menu ft-menu">
        <ul class="hero__menu-content nav flex-column flex-lg-row ft-menu__slider animated list-unstyled p-2 p-lg-0">
          <li class="flex-grow-1">
            <ul class="nav nav--lg-side list-unstyled align-items-center p-0">
              <li class="hero-nav__item">
                <a href="#contact-us" class="hero-nav__link">Contact Us</a>
              </li>
              <li class="hero-nav__item">
                <a href="#faq" class="hero-nav__link">FAQ</a>
              </li>
              <li class="hero-nav__item">
                <a href="#pricing" class="hero-nav__link">Pricing</a>
              </li>
              <li class="hero-nav__item">
                <a href="#testimonials" class="hero-nav__link">Testimonials</a>
              </li>
              <li class="hero-nav__item">
                <a href="#features" class="hero-nav__link">Features</a>
              </li>
              <li class="hero-nav__item">
                <a href="#product" class="hero-nav__link">Product</a>
              </li>
            </ul>
          </li>
        </ul>
        <button onclick="document.querySelector('#hero-menu').classList.toggle('ft-menu--js-show')"
          class="ft-menu__close-btn animated">
          <svg class="bi bi-x" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z"
              clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z"
              clip-rule="evenodd" />
          </svg>
        </button>
      </li>
      <li class="d-lg-none flex-grow-1 d-flex flex-row-reverse hero-nav__item">
        <button onclick="document.querySelector('#hero-menu').classList.toggle('ft-menu--js-show')"
          class="text-center px-2">
          <i class="fas fa-bars"></i>
        </button>
      </li>
    </ul>
  </nav>