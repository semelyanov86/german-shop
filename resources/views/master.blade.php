<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <meta name="author" content="AutoShop">
    <title>{{ $page_title ?? 'Shop' }}</title>
    @include('partials.scripts')


</head>
<body class="tools-bg">


<!-- header start -->
<header class="header-tools">
    <div class="mobile-fix-option"></div>
    @include('partials.top-header')
    <div class="logo-menu-part">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
{{--                        @include('partials.left-menu')--}}
                        {{ Menu::display('main', 'main-menu') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

@yield('content')

<!-- footer section start -->
<footer class="sticky-footer  blur-up lazyload">
    <section class="section-b-space darken-layout">
        <div class="container">
            <div class="row footer-theme partition-f">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-title footer-mobile-title">
                        <h4>about</h4>
                    </div>
                    <div class="footer-contant">
                        <div class="footer-logo">
                            <img src="assets/images/icon/layout4/footerlogo.png" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                        <div class="footer-social">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col offset-xl-1 ">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>my account</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="#">mens</a></li>
                                <li><a href="#">womens</a></li>
                                <li><a href="#">clothing</a></li>
                                <li><a href="#">accessories</a></li>
                                <li><a href="#">featured</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>why we choose</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="#">shipping &amp; return</a></li>
                                <li><a href="#">secure shopping</a></li>
                                <li><a href="#">gallary</a></li>
                                <li><a href="#">affiliates</a></li>
                                <li><a href="#">contacts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>store information</h4>
                        </div>
                        <div class="footer-contant">
                            <ul class="contact-list">
                                <li><i class="fa fa-map-marker"></i>Multikart Demo Store, Demo store
                                    India 345-659</li>
                                <li><i class="fa fa-phone"></i>Call Us: 123-456-7898</li>
                                <li><i class="fa fa-envelope-o"></i>Email Us: <a href="#">Support@Fiot.com</a></li>
                                <li><i class="fa fa-fax"></i>Fax: 123456</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sub-footer dark-subfooter">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="footer-end">
                        <p><i class="fa fa-copyright" aria-hidden="true"></i>  2017-18 themeforest powered by pixelstrap</p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="payment-card-bottom">
                        <ul>
                            <li>
                                <a href="#"><img src="assets/images/icon/visa.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/icon/mastercard.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/icon/paypal.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/icon/american-express.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/icon/discover.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer section end -->


<!-- Add to cart bar -->
<div id="cart_side" class=" add_to_cart right">
    <a href="javascript:void(0)" class="overlay" onclick="closeCart()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my cart</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeCart()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="cart_media">
            <ul class="cart_product">
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="assets/images/tools/pro/1.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>1 x $ 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="assets/images/tools/pro/2.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>1 x $ 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a href="#"><img alt="" class="mr-3" src="assets/images/tools/pro/3.jpg"></a>
                        <div class="media-body">
                            <a href="#"><h4>item name</h4></a>
                            <h4><span>1 x $ 299.00</span></h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
            </ul>
            <ul class="cart_total">
                <li>
                    <div class="total">
                        <h5>subtotal : <span>$299.00</span></h5>
                    </div>
                </li>
                <li>
                    <div class="buttons">
                        <a href="cart.html" class="btn btn-solid btn-xs view-cart">view cart</a>
                        <a href="#" class="btn btn-solid btn-xs checkout">checkout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Add to cart bar end-->


<!--modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body modal1">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="modal-bg">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="offer-content">
                                    <img src="assets/images/Offer-banner.png" class="img-fluid blur-up lazyload" alt="">
                                    <h2>newsletter</h2>
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Enter your email">
                                            <button type="submit" class="btn btn-solid ">subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal popup end-->


<!-- Quick-view modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content quick-view-modal">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="row">
                    <div class="col-lg-6  col-xs-12">
                        <div class="quick-view-img">
                            <img src="assets/images/pro3/1.jpg" alt="" class="img-fluid blur-up lazyload">
                        </div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2> Women Pink Shirt </h2>
                            <h3>$32.96 </h3>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                            </div>
                            <div class="product-description border-product">
                                <div class="size-box">
                                    <ul>
                                        <li class="active"><a href="#">s</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">xl</a></li>
                                    </ul>
                                </div>
                                <h6 class="product-title">quantity</h6>
                                <div class="qty-box">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                <i class="ti-angle-left"></i>
                                            </button>
                                        </span>
                                        <input type="text"  name="quantity" class="form-control input-number" value="1">
                                        <span class="input-group-prepend">
                                            <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                <i class="ti-angle-right"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-buttons">
                                <a href="#"  class="btn btn-solid">add to cart</a>
                                <a href="#" class="btn btn-solid">view detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick-view modal popup end-->


<!-- theme setting -->
<a href="javascript:void(0)" onclick="openSetting()">
    <div class="setting-sidebar" id="setting-icon">
        <div>
            <i class="fa fa-cog" aria-hidden="true"></i>
        </div>
    </div>
</a>
<div id="setting_box" class="setting-box">
    <a href="javascript:void(0)" class="overlay" onclick="closeSetting()"></a>
    <div class="setting_box_body">
        <div onclick="closeSetting()">
            <div class="sidebar-back text-left"><i class="fa fa-angle-left pr-2" aria-hidden="true"></i> Back</div>
        </div>
        <div class="setting-body">
            <div class="setting-title">
                <h4>layout</h4>
            </div>
            <div class="setting-contant">
                <div class="row demo-section">
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo1"></div>
                            <div class="demo-text">
                                <h4>Fashion</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('index.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo43"><div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div></div>
                            <div class="demo-text">
                                <h4>game</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('game.html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo44"><div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div></div>
                            <div class="demo-text">
                                <h4>gym</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('gym-product.html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo45"><div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div></div>
                            <div class="demo-text">
                                <h4>tools</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('tools.html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo46"><div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div></div>
                            <div class="demo-text">
                                <h4>marijuana</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('marijuana.html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo47"><div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div></div>
                            <div class="demo-text">
                                <h4>metro</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('metro.html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo48"><div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div></div>
                            <div class="demo-text">
                                <h4>pets</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('pets.html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo49"><div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div></div>
                            <div class="demo-text">
                                <h4>video slider</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('video-slider.html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo50"><div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div></div>
                            <div class="demo-text">
                                <h4>left menu</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('left_sidebar-demo.html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo51"><div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div></div>
                            <div class="demo-text">
                                <h4>jewellery</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('jewellery.html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo2"></div>
                            <div class="demo-text">
                                <h4>Fashion</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('fashion-2.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo3"></div>
                            <div class="demo-text">
                                <h4>Fashion</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('fashion-3.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo4"></div>
                            <div class="demo-text">
                                <h4>Shoes</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('shoes.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo5"></div>
                            <div class="demo-text">
                                <h4>Bags</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('bags.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo6"></div>
                            <div class="demo-text">
                                <h4>Watch</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('watch.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo7"></div>
                            <div class="demo-text">
                                <h4>Kids</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('kids.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo8"></div>
                            <div class="demo-text">
                                <h4>Flower</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('flower.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo9"></div>
                            <div class="demo-text">
                                <h4>Nursery</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('nursery.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo10"></div>
                            <div class="demo-text">
                                <h4>Vegetables</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('vegetables.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo11"></div>
                            <div class="demo-text">
                                <h4>Beauty</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('beauty.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo12"></div>
                            <div class="demo-text">
                                <h4>Instagram Shop</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('instagram-shop.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects effect-2">
                        <div class="set-position">
                            <div class="layout-container demo13"></div>
                            <div class="demo-text">
                                <h4>Lookbook</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('lookbook-demo.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo14"></div>
                            <div class="demo-text">
                                <h4>Light</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('light.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo15"></div>
                            <div class="demo-text">
                                <h4>Full Page</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('full-page.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo16"></div>
                            <div class="demo-text">
                                <h4>Electronic-1</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('electronic-1.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo17"></div>
                            <div class="demo-text">
                                <h4>Electronic-2</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('electronic-2.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects effect-2">
                        <div class="set-position">
                            <div class="layout-container demo18"></div>
                            <div class="demo-text">
                                <h4>Video</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('video.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo19"></div>
                            <div class="demo-text">
                                <h4>Goggles</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('goggles.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                        <div class="set-position">
                            <div class="layout-container demo20"></div>
                            <div class="demo-text">
                                <h4>Parallax</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('parallax.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                        <div class="set-position">
                            <div class="layout-container demo21"></div>
                            <div class="demo-text">
                                <h4>Furniture</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('furniture.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="setting-title">
                <h4>shop</h4>
            </div>
            <div class="setting-contant">
                <div class="row demo-section">
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo22"></div>
                            <div class="demo-text">
                                <h4>left sidebar</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo24"></div>
                            <div class="demo-text">
                                <h4>right sidebar</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(right).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo23"></div>
                            <div class="demo-text">
                                <h4>no sidebar</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(no-sidebar).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo25"></div>
                            <div class="demo-text">
                                <h4>popup</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(sidebar-popup).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo52"><div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div></div>
                            <div class="demo-text">
                                <h4>metro</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(metro).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo53"><div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div></div>
                            <div class="demo-text">
                                <h4>full width</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(full-width).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo26"></div>
                            <div class="demo-text">
                                <h4>infinite scroll</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(infinite-scroll).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo54"></div>
                            <div class="demo-text">
                                <h4>three grid</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(3-grid).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                        <div class="set-position">
                            <div class="layout-container demo55"></div>
                            <div class="demo-text">
                                <h4>six grid</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(6-grid).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                        <div class="set-position">
                            <div class="layout-container demo56"></div>
                            <div class="demo-text">
                                <h4>list view</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('category-page(list-view).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="setting-title">
                <h4>product</h4>
            </div>
            <div class="setting-contant">
                <div class="row demo-section">
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo40"><div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div></div>
                            <div class="demo-text">
                                <h4>four image </h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(4-image).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo33"></div>
                            <div class="demo-text">
                                <h4>left sidebar</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page.html')" class="btn new-tab-btn">Preview</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo36"></div>
                            <div class="demo-text">
                                <h4>right sidebar</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(right-sidebar).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo34"></div>
                            <div class="demo-text">
                                <h4>no sidebar</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(no-sidebar).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo41"><div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div></div>
                            <div class="demo-text">
                                <h4>bundle</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(bundle).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo42"><div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div></div>
                            <div class="demo-text">
                                <h4>image swatch</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(image-swatch).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo32"></div>
                            <div class="demo-text">
                                <h4>left image</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(left-image).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo35"></div>
                            <div class="demo-text">
                                <h4>right image</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(right-image).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo31"><div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div></div>
                            <div class="demo-text">
                                <h4>image outside</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(image-outside).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo27"></div>
                            <div class="demo-text">
                                <h4>3-col left</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(3-col-left).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo28"></div>
                            <div class="demo-text">
                                <h4>3-col right</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(3-col-right).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo29"></div>
                            <div class="demo-text">
                                <h4>3-col bottom</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(3-column).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo37"></div>
                            <div class="demo-text">
                                <h4>sticky</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(sticky).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects">
                        <div class="set-position">
                            <div class="layout-container demo30"></div>
                            <div class="demo-text">
                                <h4>accordian</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(accordian).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                        <div class="set-position">
                            <div class="layout-container demo38"></div>
                            <div class="demo-text">
                                <h4>vertical tab</h4>
                                <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onClick="window.open('product-page(vertical-tab).html')" class="btn new-tab-btn">Preview</button> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="setting-title">
                <h4>color option</h4>
            </div>
            <div class="setting-contant">
                <ul class="color-box">
                    <li class="active"><a href="#" class="color1" ></a></li>
                    <li><a href="#" class="color2" ></a></li>
                    <li><a href="#" class="color3" ></a></li>
                    <li><a href="#" class="color4" ></a></li>
                    <li><a href="#" class="color5" ></a></li>
                    <li><a href="#" class="color6" ></a></li>
                    <li><a href="#" class="color7" ></a></li>
                    <li><a href="#" class="color8" ></a></li>
                    <li><a href="#" class="color9" ></a></li>
                    <li><a href="#" class="color10" ></a></li>
                    <li><a href="#" class="color11" ></a></li>
                    <li><a href="#" class="color12" ></a></li>
                    <li><a href="#" class="color13" ></a></li>
                    <li><a href="#" class="color14" ></a></li>
                    <li><a href="#" class="color15" ></a></li>
                    <li><a href="#" class="color16" ></a></li>
                    <li><a href="#" class="color17" ></a></li>
                    <li><a href="#" class="color18" ></a></li>
                </ul>
            </div>
            <div class="setting-title">
                <h4>RTL</h4>
            </div>
            <div class="setting-contant">
                <ul class="setting_buttons">
                    <li class="active" id="ltr_btn"><a href="javascript:void(0)" class="btn setting_btn">LTR</a></li>
                    <li id="rtl_btn"><a href="javascript:void(0)" class="btn setting_btn">RTL</a></li>
                </ul>
            </div>
            <div class="buy_btn">
                <a href="https://themeforest.net/item/multikart-responsive-ecommerce-html-template/22809967?s_rank=1" target="_blank" class="btn btn-block purchase_btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> purchase Multikart now!</a>
                <a href="https://themeforest.net/item/multikart-responsive-angular-ecommerce-template/22905358?s_rank=3" target="_blank" class="btn btn-block purchase_btn"><img src="assets/images/icon/angular.png" alt="" class="img-fluid"> Multikart Angular</a>
                <a href="https://themeforest.net/item/multikart-responsive-react-ecommerce-template/23067773?s_rank=2" target="_blank" class="btn btn-block purchase_btn"><img src="assets/images/icon/react.png" alt="" class="img-fluid"> Multikart React</a>
                <a href="https://themeforest.net/item/multikart-multipurpose-shopify-sections-theme/23093831?s_rank=1" target="_blank" class="btn btn-block purchase_btn"><img src="assets/images/icon/shopify.png" alt="" class="img-fluid"> Multikart Shopify</a>
            </div>
        </div>
    </div>
</div>
<!-- theme setting -->

<!-- Add to cart modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body modal1">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="modal-bg addtocart">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="media">
                                    <a href="#">
                                        <img class="img-fluid blur-up lazyload pro-img" src="assets/images/fashion/product/43.jpg" alt="">
                                    </a>
                                    <div class="media-body align-self-center text-center">
                                        <a href="#">
                                            <h6>
                                                <i class="fa fa-check"></i>Item
                                                <span>men full sleeves</span>
                                                <span> successfully added to your Cart</span>
                                            </h6>
                                        </a>
                                        <div class="buttons">
                                            <a href="#" class="view-cart btn btn-solid">Your cart</a>
                                            <a href="#" class="checkout btn btn-solid">Check out</a>
                                            <a href="#" class="continue btn btn-solid">Continue shopping</a>
                                        </div>

                                        <div class="upsell_payment">
                                            <img src="assets/images/payment_cart.png" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-section">
                                    <div class="col-12 product-upsell text-center">
                                        <h4>Customers who bought this item also.</h4>
                                    </div>
                                    <div class="row" id="upsell_product">
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="#">
                                                        <img src="assets/images/fashion/product/1.jpg" class="img-fluid blur-up lazyload mb-1" alt="cotton top">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="#">
                                                        <img src="assets/images/fashion/product/34.jpg" class="img-fluid blur-up lazyload mb-1" alt="cotton top">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="#">
                                                        <img src="assets/images/fashion/product/13.jpg" class="img-fluid blur-up lazyload mb-1" alt="cotton top">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="#">
                                                        <img src="assets/images/fashion/product/19.jpg" class="img-fluid blur-up lazyload mb-1" alt="cotton top">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add to cart modal popup end-->


<!-- tap to top -->
<div class="tap-top">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top end -->


<!-- slider parallax effect jquery-->
<script src="assets/js/parallax-effect.js"></script>

<!-- latest jquery-->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- menu js-->
<script src="assets/js/menu.js"></script>

<!-- lazyload js-->
<script src="assets/js/lazysizes.min.js"></script>

<!-- popper js-->
<script src="assets/js/popper.min.js"></script>

<!-- slick js-->
<script src="assets/js/slick.js"></script>

<!-- Bootstrap js-->
<script src="assets/js/bootstrap.js"></script>

<!-- Bootstrap Notification js-->
<script src="assets/js/bootstrap-notify.min.js"></script>

<!-- footer reveal js-->
<script src="assets/js/footer-reveal.min.js"></script>

<!-- Theme js-->
<script src="assets/js/script.js" ></script>


<script>
    $(window).on('load',function(){
        $('#exampleModal').modal('show');
    });
    function openSearch() {
        document.getElementById("search-overlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("search-overlay").style.display = "none";
    }
    $('footer').footerReveal();

</script>

</body>

</html>


