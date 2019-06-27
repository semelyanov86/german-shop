@extends('master')

@section('content')
    <!-- Home slider -->
    <section id="tool-bg" class="p-0 height-85 tools_slider">
        <div class="slide-1 home-slider">
            @foreach($sliders as $slider)
            <div>
                <div class="home text-center">
                    <img src="/storage/{{$slider->image}}" alt="{{$slider->title}}" class="bg-img blur-up lazyload">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        {!! $slider->body !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($slider->slug == 'welcome-to-tools')
                        <div class="tools-parts" id="tool-1">
                            <img src="{{ asset('assets/images/tools/3.png') }}" class="img-fluid blur-up lazyload" alt="">
                        </div>
                        <div class="tools-parts1" id="tool-2">
                            <img src="{{ asset('assets/images/tools/4.png') }}" class="img-fluid blur-up lazyload" alt="">
                        </div>
                            @else
                            <div class="tools-parts" id="tool-3">
                                <img src="{{ asset('assets/images/tools/1.png') }}" class="img-fluid blur-up lazyload" alt="">
                            </div>
                            @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Home slider end -->


    <!-- service section start -->
    <section class="banner-padding absolute-banner pb-0 tools-service">
        <div class="container absolute-bg">
            <div class="service p-0 ">
                <div class="row">
                    @include('partials.advantages')
                </div>
            </div>
        </div>
    </section>
    <!-- service section end -->


    <!-- about section start-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="title3">
                        <h2 class="title-inner3">{{ $pages[1]->title }}</h2>
                        <div class="line"></div>
                    </div>
                    <div class="about-text">
                        <p>
                            {{ $pages[1]->excerpt }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end-->


    <!-- category -->
@include('partials.product-form')
    <!-- category end -->

{{--
    <!-- product slider start -->
    <section class="section-b-space tools-grey ratio_square">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title3">
                        <h2 class="title-inner3">Popular products</h2>
                        <div class="line"></div>
                    </div>
                    <div class="product-5 product-m no-arrow">
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="ribbon"><span>new</span></div>
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/1.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    <button  title="Add to cart" onclick="openCart()"><i class="ti-shopping-cart"></i> Add to cart</button>
                                    <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                    <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                                <div class="quick-view-part">
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                <h4>$500.00</h4>
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/2.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    <button  title="Add to cart" onclick="openCart()"><i class="ti-shopping-cart"></i> Add to cart</button>
                                    <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                    <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                                <div class="quick-view-part">
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                <h4>$500.00 <del>$600.00</del></h4>
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="ribbon"><span>new</span></div>
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/3.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    <button  title="Add to cart" onclick="openCart()"><i class="ti-shopping-cart"></i> Add to cart</button>
                                    <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                    <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                                <div class="quick-view-part">
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                <h4>$500.00</h4>
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/4.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    <button  title="Add to cart" onclick="openCart()"><i class="ti-shopping-cart"></i> Add to cart</button>
                                    <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                    <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                                <div class="quick-view-part">
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                <h4>$500.00</h4>
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="ribbon"><span>new</span></div>
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/5.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    <button  title="Add to cart" onclick="openCart()"><i class="ti-shopping-cart"></i> Add to cart</button>
                                    <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                    <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                                <div class="quick-view-part">
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                <h4>$500.00</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product slider end -->


    <!-- parallax section start -->
    <section class="full-banner parallax small-slider tools-parallax-product">
        <img src="assets/images/parallax/21.jpg" alt="" class="bg-img blur-up lazyload">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="tools-description">
                        <div>
                            <h3>select your vehical</h3>
                            <div class="tools-form">
                                <div class="search-box">
                                    <select  class="form-control">
                                        <option value="">Select Make</option>
                                        <option value="1">Audi</option>
                                        <option value="2">BMW</option>
                                        <option value="3">Fiat</option>
                                        <option value="4">Hyndai</option>
                                        <option value="5">Skoda</option>
                                    </select>
                                </div>
                                <div class="search-box">
                                    <select name="model"  class="form-control">
                                        <option value="">Select Model</option>
                                    </select>
                                </div>
                                <div class="search-box">
                                    <select name="engine"  class="form-control">
                                        <option value="">Select category</option>
                                    </select>
                                </div>
                                <div class="search-box">
                                    <select name="year" class="form-control">
                                        <option value="">Select Year</option>
                                    </select>
                                </div>
                                <div class="search-button">
                                    <a href="#" class="btn btn-solid btn-find">find my part</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12 tools-grey ratio_square">
                    <div class="tools-product-4 product-m">
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="ribbon"><span>new</span></div>
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/1.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    <button  onclick="openCart()" title="Add to cart"><i class="ti-shopping-cart"></i> Add to cart</button>
                                    <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                    <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                                <div class="quick-view-part">
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                <h4>$500.00</h4>
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/2.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    <button onclick="openCart()" title="Add to cart"><i class="ti-shopping-cart"></i> Add to cart</button>
                                    <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                    <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                                <div class="quick-view-part">
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                <h4>$500.00 <del>$600.00</del></h4>
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="ribbon"><span>new</span></div>
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/3.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    <button onclick="openCart()"  title="Add to cart"><i class="ti-shopping-cart"></i> Add to cart</button>
                                    <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                    <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                                <div class="quick-view-part">
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                <h4>$500.00</h4>
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/4.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    <button onclick="openCart()"  title="Add to cart"><i class="ti-shopping-cart"></i> Add to cart</button>
                                    <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                    <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                                <div class="quick-view-part">
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                <h4>$500.00</h4>
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="ribbon"><span>new</span></div>
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/5.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                </div>
                                <div class="cart-info cart-wrap">
                                    <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    <button onclick="openCart()"  title="Add to cart"><i class="ti-shopping-cart"></i> Add to cart</button>
                                    <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                    <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                                <div class="quick-view-part">
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                <h4>$500.00</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- parallax section end -->


    <!-- product section start -->
    <section class="tools_product">
        <div class="container">
            <div class="row multiple-slider">
                <div class="col-xl-3 col-lg-4 col-md-12">
                    <div class="theme-card">
                        <h5 class="title-border">new products</h5>
                        <div class="offer-slider slide-1">
                            <div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="assets/images/tools/pro/6.jpg" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00 <del>$600.00</del></h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="assets/images/tools/pro/7.jpg" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="assets/images/tools/pro/12.jpg" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="assets/images/tools/pro/13.jpg" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="assets/images/tools/pro/9.jpg" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00 <del>$600.00</del></h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="assets/images/tools/pro/10.jpg" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="assets/images/tools/pro/14.jpg" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="assets/images/tools/pro/15.jpg" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-12 tools-grey">
                    <div class="theme-tab">
                        <ul class="tabs tab-title">
                            <li class="current">
                                <a href="tab-4">New Products</a>
                            </li>
                            <li class="">
                                <a href="tab-5">Featured Products</a>
                            </li>
                        </ul>
                        <div class="tab-content-cls ratio_square">
                            <div id="tab-4" class="tab-content active default">
                                <div class="product_4 product-m no-arrow">
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="ribbon"><span>new</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/16.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <button  onclick="openCart()" title="Add to cart"><i class="ti-shopping-cart"></i> Add to cart</button>
                                                <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                                <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="quick-view-part">
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/17.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <button  onclick="openCart()" title="Add to cart"><i class="ti-shopping-cart"></i> Add to cart</button>
                                                <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                                <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="quick-view-part">
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/18.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <button onclick="openCart()"  title="Add to cart"><i class="ti-shopping-cart"></i> Add to cart</button>
                                                <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                                <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="quick-view-part">
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="ribbon"><span>new</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/19.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <button onclick="openCart()"  title="Add to cart"><i class="ti-shopping-cart"></i> Add to cart</button>
                                                <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                                <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="quick-view-part">
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/17.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <button  onclick="openCart()" title="Add to cart"><i class="ti-shopping-cart"></i> Add to cart</button>
                                                <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                                <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="quick-view-part">
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-5" class="tab-content">
                                <div class="product_4 product-m no-arrow">
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/20.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <button onclick="openCart()" title="Add to cart"><i class="ti-shopping-cart"></i> Add to cart</button>
                                                <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                                <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="quick-view-part">
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="ribbon"><span>new</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/21.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <button onclick="openCart()" title="Add to cart"><i class="ti-shopping-cart"></i> Add to cart</button>
                                                <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                                <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="quick-view-part">
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/22.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <button onclick="openCart()" title="Add to cart"><i class="ti-shopping-cart"></i> Add to cart</button>
                                                <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                                <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="quick-view-part">
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/23.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <button onclick="openCart()" title="Add to cart"><i class="ti-shopping-cart"></i> Add to cart</button>
                                                <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                                <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="quick-view-part">
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt="" src="assets/images/tools/pro/22.jpg" class="img-fluid blur-up lazyload bg-img" ></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <a href="javascript:void(0)"  title="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <button onclick="openCart()" title="Add to cart"><i class="ti-shopping-cart"></i> Add to cart</button>
                                                <a href="compare.html" title="Compare"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                                <a class="mobile-quick-view" href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="quick-view-part">
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-tools">
                        <img src="assets/images/tools/banner.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->--}}


    <!-- logo section -->
    <section class="section-b-space tools-brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-6 no-arrow">
                        <div>
                            <div class="logo-block">
                                <a href="#">
                                    <img src="assets/images/logos/9.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#">
                                    <img src="assets/images/logos/10.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#">
                                    <img src="assets/images/logos/11.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#">
                                    <img src="assets/images/logos/12.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#">
                                    <img src="assets/images/logos/13.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#">
                                    <img src="assets/images/logos/14.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#">
                                    <img src="assets/images/logos/15.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#">
                                    <img src="assets/images/logos/16.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- logo section end -->
@endsection