<section class="section-b-space darken-layout">
    <div class="container">
        <div class="row footer-theme partition-f">
            <div class="col-lg-4 col-md-6">
                <div class="footer-title footer-mobile-title">
                    <h4>about</h4>
                </div>
                <div class="footer-contant">
                    <div class="footer-logo">
                        <img src="/storage/{{setting('site.logo')}}" alt="">
                    </div>
                    <p>{{$pages[2]->excerpt}}</p>
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
                        <h4>{{trans('app.my-account')}}</h4>
                    </div>
                    <div class="footer-contant">
                        {{ Menu::display('account', 'account-menu') }}

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="sub-title">
                    <div class="footer-title">
                        <h4>{{trans('app.why-choose')}}</h4>
                    </div>
                    <div class="footer-contant">
                        {{ Menu::display('why-choose', 'why-choose-menu') }}
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="sub-title">
                    <div class="footer-title">
                        <h4>{{trans('app.storeinfo')}}</h4>
                    </div>
                    <div class="footer-contant">
                        <ul class="contact-list">
                            <li><i class="fa fa-map-marker"></i>{{setting('site.address')}}</li>
                            <li><i class="fa fa-phone"></i>{{trans('app.Call')}}: {{setting('site.phone')}}</li>
                            <li><i class="fa fa-envelope-o"></i>{{ trans('app.email') }}: <a href="#">{{setting('site.email')}}</a></li>
                            <li><i class="fa fa-fax"></i>{{ trans('app.fax') }}: {{setting('site.fax')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>