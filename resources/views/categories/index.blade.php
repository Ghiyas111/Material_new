<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Ogani Template" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Material</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="frontend/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="frontend/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="frontend/css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="frontend/css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="frontend/css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="frontend/css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="frontend/css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="frontend/css/style.css" type="text/css" />
  </head>

  <body>
    <!-- Page Preloder 
    <div id="preloder">
      <div class="loader"></div>
    </div>-->

    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
      <div class="humberger__menu__logo">
        <a  href="#"><img style="margin-left: 200px;"="{{ asset('frontend/img/logo.png') }}" alt="" /></a>
      </div>
      <div class="humberger__menu__cart">
        <ul>
          <li>
            <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
          </li>
      </div>
      <div class="humberger__menu__widget">
          @guest
            <div class="header__top__right__language">
              <div class="header__top__right__auth">
              <a href="{{ route('login') }}"><i class="fa fa-user"></i>Login</a>
              </div>
            </div>
            <div class="header__top__right__auth" style="margin-left: 20px">
              <a href="{{ route('register') }}"><i class="fa fa-user"></i> Register</a>
            </div>
          @else 
          <div class="header__top__right__language">
            <div class="header__top__right__auth">
              <a href=""><i class="fa fa-user"></i> {{ auth()->user()->username }}</a>
            </div>
            <span class="arrow_carrot-down"></span>
            <ul>
              <li><a href="#">Profile</a></li>
            </ul>
          </div>
          <div class="header__top__right__auth" style="margin-left: 20px">
            <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-user"></i> Logout</a>
            <form action="{{ route('logout') }}" id="logout-form" method="post">
              @csrf 

            </form>
          </div>
          @endguest
      </div>
      <nav class="humberger__menu__nav mobile-menu">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="{{ route('shop.index') }}">Shop</a></li>
          <li>
          <a href="{{ route('categories.index') }}">Categories</a>

            <ul class="header__menu__dropdown">
              @foreach($menu_categories as $menu_category)
                <li><a href="{{ route('shop.index', $menu_category->slug) }}">{{ $menu_category->name }}</a></li>
              @endforeach
            </ul>
          </li>
          <li><a href="{{ route('layouts.contact') }}">Contact Us</a></li>
          
        </ul>
      </nav>
  <div id="mobile-menu-wrap"></div>
      <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
      </div>
      <div class="humberger__menu__contact">
        <ul>
          <li><i class="fa fa-envelope"></i> Material@gmail.com</li>
          <li>Free Shipping for all Order of $99</li>
        </ul>
      </div>
    </div>
  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="header__top__left">
              <ul>
                <li><i class="fa fa-envelope"></i> Material@gmail.com</li>
                
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
              @guest
                <div class="header__top__right">
                  <div
                    class="header__top__right__language header__top__right__auth"
                  >
                  <a class="d-inline" href="{{ route('login1.form') }}"
                        ><i class="fa fa-user"></i> Login</a>
                  </div>
                  <div class="header__top__right__auth">
                  <div class="header__top__right__auth">
                      <a href="{{ route('register1.form') }}"><i class="fa fa-user"></i> Register</a>
                    </div>
                  </div>
              </div>
              @else 
              <div class="header__top__right">
              <div
                class="header__top__right__language header__top__right__auth"
              >
                <a class="d-inline" href="#"
                  ><i class="fa fa-user"></i> {{ auth()->user()->username }}</a
                >
                <span class="arrow_carrot-down"></span>
                <ul>
                  <li><a href="#">Profile</a></li>
                </ul>
              </div>
              <div class="header__top__right__auth">
                <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit()"><i class="fa fa-user"></i> Logout</a>
                <form action="{{ route('logout') }}" id="logout-form" method="post">
                  @csrf                   
                </form>
              </div>
            </div>
              @endguest
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="header__logo">
            <a href="/"><img src="{{ asset('frontend/img/logo.png') }}" alt="" /></a>
          </div>
        </div>
        <div class="col-lg-7">
          <nav class="header__menu">
            <ul>
              <li class="active"><a href="/">Home</a></li>
              <li><a href="{{ route('shop.index') }}">Shop</a></li>
              <li>
                
                <ul class="header__menu__dropdown">
                  @foreach($menu_categories as $menu_category)
                    <li><a href="{{ route('layouts.categories', $menu_category->slug) }}">{{ $menu_category->name }}</a></li>
                  @endforeach
                </ul>
              </li>
              <li style="margin-left: -47px;" ><a href="{{ route('layouts.contact') }}">Contact Us</a></li>
              <li><a href="{{ route('about-us') }}">About Us</a></li>
              <li ><a href="{{ route('categories.index') }}">Checkout</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-lg-2">
          <div class="header__cart">
            <ul>
              <li>
                <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
              </li>
          </div>
        </div>
      </div>
      <div class="humberger__open">
        <i class="fa fa-bars"></i>
      </div>
    </div>
  </header>
  <!-- Header Section End -->

  <!-- Hero Section Begin -->
  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="hero__search">
            <div class="hero__search__form">
              <form action="#">
                <input type="text" placeholder="What do yo u need?" />
                <button type="submit" class="site-btn">SEARCH</button>
              </form>
            </div>
            <div class="hero__search__phone">
              <div class="hero__search__phone__icon">
                <i class="fa fa-phone"></i>
              </div>
              <div class="hero__search__phone__text">
                <h5>+62 82240549998</h5>
                <span>support 24/7 time</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin 
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/banner/banner-1.jpg') }}">-->
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
              <h2>Checkout</h2>
              <div class="breadcrumb__option">
                <a href="./index.html">Home</a>
                <span>Checkout</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
      <div style = "margin-top:-180px;" class="container">
        <div class="checkout__form">
          <h4>Billing Details</h4>
          <form action="#">
            <div class="row">
              <div class="col-lg-8 col-md-6">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Fist Name<span>*</span></p>
                      <input type="text" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Last Name<span>*</span></p>
                      <input type="text" />
                    </div>
                  </div>
                </div>
                <div class="checkout__input">
                  <p>Country<span>*</span></p>
                  <input type="text" />
                </div>
                <div class="checkout__input">
                  <p>Address<span>*</span></p>
                  <input
                    type="text"
                    placeholder="Street Address"
                    class="checkout__input__add"
                  />
                  <input
                    type="text"
                    placeholder="Apartment, suite, unite ect (optinal)"
                  />
                </div>
                <div class="checkout__input">
                  <p>Town/City<span>*</span></p>
                  <input type="text" />
                </div>
                <div class="checkout__input">
                  <p>Country/State<span>*</span></p>
                  <input type="text" />
                </div>
                <div class="checkout__input">
                  <p>Postcode / ZIP<span>*</span></p>
                  <input type="text" />
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Phone<span>*</span></p>
                      <input type="text" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Email<span>*</span></p>
                      <input type="text" />
                    </div>
                  </div>
                </div>
                <div class="checkout__input">
                  <p>Order notes<span>*</span></p>
                  <input
                    type="text"
                    placeholder="Notes about your order, e.g. special notes for delivery."
                  />
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="checkout__order">
                  <h4>Your Order</h4>
                  <div class="checkout__order__products">
                    Products <span>Total</span>
                  </div>
                  <ul>
                    <li>Paku <span>Rp.20,000</span></li>
                    <li>Baut <span>Rp.30,000</span></li>
                    <li>Semen <span>Rp.200,000</span></li>
                  </ul>
                  <div class="checkout__order__subtotal">
                    Subtotal <span>Rp.9,999</span>
                  </div>
                  <div class="checkout__order__total">
                    Total <span>Rp.10,000</span>
                  </div>
                  <!-- <div class="checkout__input__checkbox">
                    <label for="payment">
                      Check Payment
                      <input type="checkbox" id="payment" />
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="checkout__input__checkbox">
                    <label for="paypal">
                      Paypal
                      <input type="checkbox" id="paypal" />
                      <span class="checkmark"></span>
                    </label>
                  </div> -->
                  <button type="submit" class="site-btn">PLACE ORDER</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- Checkout Section End -->

   <!-- Footer Section Begin -->
 <footer class="footer spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="footer__about">
          <div class="footer__about__logo">
            <a href="./index.html"><img src="{{ asset('frontend/img/logo.png') }}" alt="" /></a>
          </div>
          <ul>
            <li>Address : SMKN 1 CIAMIS</li>
            <li>Phone: 0909090909</li>
            <li>Email: Material.com</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
        <div class="footer__widget">
          <h6>Useful Links</h6>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">About Our Shop</a></li>
            <li><a href="#">Secure Shopping</a></li>
            <li><a href="#">Delivery infomation</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Our Sitemap</a></li>
          </ul>
          <ul>
            <li><a href="#">Who We Are</a></li>
            <li><a href="#">Our Services</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Innovation</a></li>
            <li><a href="#">Testimonials</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="footer__widget">
          <h6>Join Our Newsletter Now</h6>
          <p>
            Get E-mail updates about our latest shop and special offers.
          </p>
          <form action="#">
            <input type="text" placeholder="Enter your mail" />
            <button type="submit" class="site-btn">Subscribe</button>
          </form>
          <div class="footer__widget__social">
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="footer__copyright">
          <div class="footer__copyright__text">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              All rights reserved | This template is made with
              <i class="fa fa-heart" aria-hidden="true"></i> by
              <a href="https://colorlib.com" target="_blank">Material</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          <div class="footer__copyright__payment">
            <img src="img/payment-item.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
