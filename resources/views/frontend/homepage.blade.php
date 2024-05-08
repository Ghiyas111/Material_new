@extends('layouts.frontend')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="mb-5">
      <div class="container">
          <div class="hero__item set-bg" data-setbg="{{ asset('frontend/img/hero/banner.jpg') }}">
              <div class="hero__text">
                  <span>Baja Kuat</span>
                  <h2>Material <br />100% Original</h2>
                  <p>Free Pickup and Delivery Available</p>
                  <a href="#" class="primary-btn">SHOP NOW</a>
              </div>
          </div>
      </div>
    </section>
      <!-- Breadcrumb Section End -->

        <!-- Categories Section Begin -->
        <section class="categories mt-5">
          <div class="container">
              <div class="row">
                  <div class="categories__slider owl-carousel">
                      <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cat-1.jpg') }}">
                              <h5><a href="#">Perlengkapan Keamanan</a></h5>
                          </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cat-2.jpg') }}">
                              <h5><a href="#">Bahan Bangunan</a></h5>
                          </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cat-3.jpg') }}">
                              <h5><a href="#">Alat Bangunan</a></h5>
                          </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="frontend/img/categories/cat-4.jpg">
                              <h5><a href="#">Cat</a></h5>
                          </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cat-5.jpg') }}">
                              <h5><a href="#">Paku</a></h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Categories Section End -->

      <!-- Featured Section Begin -->
      <section class="featured spad">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="section-title">
                          <h2>Produk</h2>
                      </div>
                  </div>
              </div>
              <div class="row featured__filter">
                  <div
                      class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat"
                  >
                      <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/feature-1.jpg') }}">
                              <ul class="featured__item__pic__hover">
                                  <li>
                                      <a href="#"
                                          ><i class="fa fa-heart"></i
                                      ></a>
                                  </li>
                                  <li>
                                      <a href="#"
                                          ><i class="fa fa-shopping-cart"></i
                                      ></a>
                                  </li>
                              </ul>
                          </div>
                          <div class="featured__item__text">
                              <h6><a href="#">Helm Proyek</a></h6>
                              <h5>Rp. 50.000</h5>
                          </div>
                      </div>
                  </div>
                  <div
                      class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood"
                  >
                      <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="frontend/img/featured/feature-2.jpg">
                              <ul class="featured__item__pic__hover">
                                  <li>
                                      <a href="#"
                                          ><i class="fa fa-heart"></i
                                      ></a>
                                  </li>
                                  <li>
                                      <a href="#"
                                          ><i class="fa fa-shopping-cart"></i
                                      ></a>
                                  </li>
                              </ul>
                          </div>
                          <div class="featured__item__text">
                              <h6><a href="#">Palu</a></h6>
                              <h5>Rp. 25.000</h5>
                          </div>
                      </div>
                  </div>
                  <div
                      class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat"
                  >
                      <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="frontend/img/featured/feature-3.jpg">
                              <ul class="featured__item__pic__hover">
                                  <li>
                                      <a href="#"
                                          ><i class="fa fa-heart"></i
                                      ></a>
                                  </li>
                                  <li>
                                      <a href="#"
                                          ><i class="fa fa-shopping-cart"></i
                                      ></a>
                                  </li>
                              </ul>
                          </div>
                          <div class="featured__item__text">
                              <h6><a href="#">Kayu</a></h6>
                              <h5>Rp. 40.000</h5>
                          </div>
                      </div>
                  </div>
                  <div
                      class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges"
                  >
                      <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="frontend/img/featured/feature-4.jpg">
                              <ul class="featured__item__pic__hover">
                                  <li>
                                      <a href="#"
                                          ><i class="fa fa-heart"></i
                                      ></a>
                                  </li>
                                  <li>
                                      <a href="#"
                                          ><i class="fa fa-shopping-cart"></i
                                      ></a>
                                  </li>
                              </ul>
                          </div>
                          <div class="featured__item__text">
                              <h6><a href="#">Paku</a></h6>
                              <h5>Rp. 10.000 -</h5>
                          </div>
                      </div>
                  </div>
                  <div
                      class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables"
                  >
                      <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="frontend/img/featured/feature-5.jpg">
                              <ul class="featured__item__pic__hover">
                                  <li>
                                      <a href="#"
                                          ><i class="fa fa-heart"></i
                                      ></a>
                                  </li>
                                  <li>
                                      <a href="#"
                                          ><i class="fa fa-shopping-cart"></i
                                      ></a>
                                  </li>
                              </ul>
                          </div>
                          <div class="featured__item__text">
                              <h6><a href="#">Gergaji Besi</a></h6>
                              <h5>Rp. 35.000 -</h5>
                          </div>
                      </div>
                  </div>
                  <div
                      class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood"
                  >
                      <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="frontend/img/featured/feature-6.jpg">
                              <ul class="featured__item__pic__hover">
                                  <li>
                                      <a href="#"
                                          ><i class="fa fa-heart"></i
                                      ></a>
                                  </li>
                                  <li>
                                      <a href="#"
                                          ><i class="fa fa-shopping-cart"></i
                                      ></a>
                                  </li>
                              </ul>
                          </div>
                          <div class="featured__item__text">
                              <h6><a href="#">Batu Bata</a></h6>
                              <h5>Rp. 15.000 -</h5>
                          </div>
                      </div>
                  </div>
                  <div
                      class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables"
                  >
                      <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="frontend/img/featured/feature-7.jpg">
                              <ul class="featured__item__pic__hover">
                                  <li>
                                      <a href="#"
                                          ><i class="fa fa-heart"></i
                                      ></a>
                                  </li>
                                  <li>
                                      <a href="#"
                                          ><i class="fa fa-shopping-cart"></i
                                      ></a>
                                  </li>
                              </ul>
                          </div>
                          <div class="featured__item__text">
                              <h6><a href="#">Pasir</a></h6>
                              <h5>Rp. 5.000 -</h5>
                          </div>
                      </div>
                  </div>
                  <div
                      class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables"
                  >
                      <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="frontend/img/featured/feature-8.jpg">
                              <ul class="featured__item__pic__hover">
                                  <li>
                                      <a href="#"
                                          ><i class="fa fa-heart"></i
                                      ></a>
                                  </li>
                                  <li>
                                      <a href="#"
                                          ><i class="fa fa-shopping-cart"></i
                                      ></a>
                                  </li>
                              </ul>
                          </div>
                          <div class="featured__item__text">
                              <h6><a href="#">Rompi</a></h6>
                              <h5>Rp. 50.000 -</h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Featured Section End -->


    <!-- Banner Begin -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
              <img src="{{ asset('frontend/img/banner/banner-1.jpg') }}" alt="" />
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
              <img src="{{ asset('frontend/img/banner/banner-2.jpg') }}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner End -->
@endsection
