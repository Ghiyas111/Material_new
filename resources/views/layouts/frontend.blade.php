<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Material" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Material</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/elegant-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css" />
  <style>
           /* Styling for transparent dropdown */
        .custom-dropdown:hover .dropdown-menu {
            display: block;
            opacity: 1;
            visibility: visible;
        }

        .custom-dropdown .dropdown-menu {
            display: none;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s;
            background-color: transparent; /* Transparent background */
            color: #000; /* Text color black */
            border: none; /* No border */
            border-radius: 0; /* No border radius */
            box-shadow: none; /* No box shadow */
        }

        .custom-dropdown .dropdown-item {
            color: #000; /* Text color black */
        }

        .custom-dropdown .dropdown-item:hover,
        .custom-dropdown .dropdown-item:focus {
            background-color: white; /* Hover color light gray */
        }

        /* Hide dropdown arrow */
        .custom-dropdown::after {
            display: none;
        }
        .category {
            background-color: white; /* Warna background putih */
            padding: 5px 10px; /* Atur padding agar teks tidak terlalu dekat dengan tepi */
            border-radius: 5px; /* Tambahkan border-radius agar sudut terlihat melengkung */
            display: inline-block; /* Atur elemen menjadi inline block agar background hanya menutupi teks */
        }
        /* Style the dropdown button */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropbtn {
            background-color:  transparent; /* Warna tombol menjadi putih */
            color: black;
            padding: 16px 24px;
            font-size: 18px;
            border: none;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

       
  </style>
  </head>

  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
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
          <li>
            <a href="#"><i class="fa fa-shopping-bag"></i> <span>{{ $cartCount }}</span></a>
          </li>
        </ul>
        <div class="header__cart__price">item: <span>${{ $cartTotal }}</span></div>
      </div>
      <div class="humberger__menu__widget">
    @guest
        <div class="header__top__right__language">
            <div class="header__top__right__auth">
                <a href="{{ route('login1.form') }}">
                    <i class="fa fa-user"></i> Login
                </a>
            </div>
        </div>
        <div class="header__top__right__auth" style="margin-left: 20px;">
            <a href="{{ route('register1.form') }}">
                <i class="fa fa-user"></i> Register
            </a>
        </div>
    @else
        <div class="header__top__right__auth">
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-user"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
            
          <a href="{{ route('categories.index') }}">Categoriesss</a>

          <div class="container">
        <h2>Kategori</h2>
        <!-- Contoh penggunaan warna background putih pada teks kategori -->
        <div class="category">Kategori 1</div>
        <div class="category">Kategori 2</div>
        <div class="category">Kategori 3</div>
    </div>
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
    <!-- Humberger End -->

    <!-- Header Section Begin -->
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
                        ><i class="fa fa-user"></i> Login</a
                      >
                    </div>
                    <div class="header__top__right__auth">
                      <a href="{{ route('register1.form') }}"><i class="fa fa-user"></i> Register</a>
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
                  <!--
                  <a href="{{'categories'}}">Categoriesssss</a>
                  <ul class="header__menu__dropdown">
                    @foreach($menu_categories as $menu_category)
                      <li><a href="{{ route('layouts.categories', $menu_category->slug) }}">{{ $menu_category->name }}</a></li>
                    @endforeach
                  </ul>
                </li>
      --><li><a style="margin-left: -50px;" href="{{ route('layouts.contact') }}">Contact Us</a></li>
     
      
                <li ><a href="{{ route('about-us') }}">About Us</a></li>
                <li ><a href="{{ route('categories.index') }}">Checkout</a></li>

                
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
                <li>
                  <a href="{{ route('cart.index') }}"
                    ><i class="fa fa-shopping-bag"></i> <span>{{ $cartCount }}</span></a
                  >
                </li>
              </ul>
              <div class="header__cart__price">item: <span>${{ $cartTotal }}</span></div>
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

    @yield('content')

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
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
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

    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
  </body>
</html>