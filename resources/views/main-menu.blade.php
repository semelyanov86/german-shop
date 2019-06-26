<div class="menu-right pull-right">
    <div>
        <nav id="main-nav">
            <div class="toggle-nav">
                <i class="fa fa-bars sidebar-bar"></i>
            </div>
            <!-- Horizontal menu -->
            <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                <li>
                    <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                </li>
                @foreach($items as $menu_item)
                    <li><a href="{{ $menu_item->url }}">{{ $menu_item->title }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
    <div>
        <div class="icon-nav">
            <ul>
                <li class="onhover-div mobile-search">
                    <div><img src="assets/images/icon/search.png" onclick="openSearch()" class="img-fluid blur-up lazyload" alt="">
                        <i class="ti-search" onclick="openSearch()"></i></div>
                    <div id="search-overlay" class="search-overlay">
                        <div>
                            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                            <div class="overlay-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product">
                                                </div>
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="onhover-div mobile-setting">
                    <div><img src="assets/images/icon/setting.png" class="img-fluid blur-up lazyload" alt="">
                        <i class="ti-settings"></i></div>
                    <div class="show-div setting">
                        <h6>language</h6>
                        <ul>
                            <li><a href="#">english</a> </li>
                            <li><a href="#">french</a> </li>
                        </ul>
                        <h6>currency</h6>
                        <ul class="list-inline">
                            <li><a href="#">euro</a> </li>
                            <li><a href="#">rupees</a> </li>
                            <li><a href="#">pound</a> </li>
                            <li><a href="#">doller</a> </li>
                        </ul>
                    </div>
                </li>
                <li class="onhover-div mobile-cart">
                    <div href="javascript:void(0)" onclick="openCart()" ><img src="assets/images/icon/cart.png" class="img-fluid blur-up lazyload" alt="">
                        <i class="ti-shopping-cart"></i></div>
                </li>
            </ul>
        </div>
    </div>
</div>