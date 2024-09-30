<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{url('CSS/home.css')}}" />
    <title>Clothing Website</title>
  </head>
  <body>
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#">FASHION</a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#catalogue">NEW ARRIVALS</a></li>
        <li><a href="#fashion">FASHION</a></li>
        <li><a href="#favourite">FAVOURITE</a></li>
        <li><a href="#lifestyle">LIFESTYLE</a></li>
        <li>
        
          <a href="signup" class="btn.1">SIGN UP</a>
          
          
        </li>
      </ul>
    </nav>
    <header>
      <div class="section__container header__container">
        <div class="header__content">
          <h1>
            <span>LET'S</span>
            <br />
            EXPLORE
            <br />
            <span>UNIQUE</span>
            <br />
            CLOTHES.
          </h1>
          <p>Style on Demand, Sustainability in Mind!</p>
          <div class="header__btns">
            <button class="btn">Shop Now</button>
          </div>
        </div>
        <div class="header__image">
          <img src="{{ asset('img/img/logo.jpg')}}" />


        </div>
      </div>
    </header>


    <section class="section__container arrival__container" id="catalogue">
      <h2 class="section__header">NEW ARRIVALS</h2>
      <div class="arrival__grid">
        <div class="arrival__card">
          <div class="arrival__image">
           
            <img src="{{ asset('img/img/newarraival1.jpg')}}" />
          </div>
          <div class="arrival__content">
            <div>
              <h4>Dresses</h4>
              <a href="#">Explore Now</a>
            </div>
            <span><i class="ri-arrow-right-line"></i></span>
          </div>
        </div>
        <div class="arrival__card">
          <div class="arrival__image">
          
            <img src="{{ asset('img/img/newarraival2.jpg')}}" />
          </div>
          <div class="arrival__content">
            <div>
              <h4>Formal Attires</h4>
              <a href="#">Explore Now</a>
            </div>
            <span><i class="ri-arrow-right-line"></i></span>
          </div>
        </div>
        <div class="arrival__card">
          <div class="arrival__image">
           
            <img src="{{ asset('img/img/newarraival3.jpg')}}" />
          </div>
          <div class="arrival__content">
            <div>
              <h4>Fasion</h4>
              <a href="#">Explore Now</a>
            </div>
            <span><i class="ri-arrow-right-line"></i></span>
          </div>
        </div>
      </div>
    </section>


    <section class="section__container favourite__container" id="favourite">
      <h2 class="section__header">YOUNG'S FAVOURITE</h2>
      <div class="favourite__grid">
        <div class="favourite__card">
          <div class="favourite__image">
        
           <img src="{{ asset('img/img/favourite1.jpg')}}" />
          </div>
          <div class="favourite__content">
            <div>
              <h4>Trending Online</h4>
              <a href="#">Explore Now</a>
            </div>
            <span><i class="ri-arrow-right-line"></i></span>
          </div>
        </div>
        <div class="favourite__card">
          <div class="favourite__image">
           
            <img src="{{ asset('img/img/favourite2.jpg')}}" />
          </div>
          <div class="favourite__content">
            <div>
              <h4>Trending Online</h4>
              <a href="#">Explore Now</a>
            </div>
            <span><i class="ri-arrow-right-line"></i></span>
          </div>
        </div>
      </div>
    </section>

    <section class="promo">
      <div class="section__container promo__container">
        <h2 class="section__header">
          WELCOME BACK, VALUED MEMBER
        </h2>
        <p>Log in to access your personalize experience!</p>
          <br>
          <br>
          <a href="{{ route('login') }}" class="btn btn-primary">LOG IN</a>

        </form>
      </div>
    </section>

    <footer>
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="footer__logo">
            <a href="#">FASHION</a>
          </div>
          <p>Complete your style with awesome clothes from us.</p>
          <ul class="footer__socials">
            <li>
              <a href="#"><i class="ri-facebook-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-instagram-line"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-twitter-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-linkedin-fill"></i></a>
            </li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Company</h4>
          <ul class="footer__links">
            <li><a href="#">About</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Quick Links</h4>
          <ul class="footer__links">
            <li><a href="#">Store Location</a></li>
            <li><a href="#">Order Tracking</a></li>
            <li><a href="#">Size Guide</a></li>
            <li><a href="#">FAQs</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Legal</h4>
          <ul class="footer__links">
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
  </body>
</html>

