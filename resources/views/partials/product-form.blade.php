<section class="section-b-space ratio_asos">
    <div id="app">
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="collection-content col">
                    <div class="page-main-content">
                        <form action="{{route('store.order')}}" method="post">
                            @csrf()
                        <div class="collection-product-wrapper">
                            <div class="product-top-filter">
                                <div class="row">
                                    <div class="col-12">
                                        @include('partials.product-filter')
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper-grid">
                                <div class="row">
                                    @foreach($products as $product)
                                    <div class="col-xl-4 col-lg-6 col-grid-box">
                                        @include('partials.product-box')
                                    </div>
                                    @endforeach
                                        @if($errors->has('quantity'))
                                            <div class="container text-center">
                                                <h3 class="mt-3 text-danger text-center">
                                                    {{$errors->first('quantity')}}
                                                </h3>
                                            </div>
                                        @endif
                                    <div class="container mt-2">
                                        <h2 class="mt-3">{{trans('app.your-total')}} @{{ sum }} €</h2>
                                        <h3 class="mt-3">{{trans('app.your-counting')}} @{{ counting }}</h3>
                                        <h3 class="mt-2">{{trans('app.your-discount')}} @{{ discount }} €</h3>
                                        <h3 class="mt-2">{{trans('app.savings')}} @{{ saving }} €</h3>
                                    </div>
                                </div>
                            </div>
                            @if($products->count() > 24)
                            <div class="product-pagination">
                                <div class="theme-paggination-block">
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                            {{ $products->links() }}
                                            {{--<nav aria-label="Page navigation">
                                                <ul class="pagination">
                                                    <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span> <span class="sr-only">Next</span></a></li>
                                                </ul>
                                            </nav>--}}
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                            <div class="product-search-count-bottom">
                                                <h5>{{trans('app.showing')}} 1-25 of {{$products->count()}} Result</h5></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endif
                        </div>

                            <div class="container mt-3">
                                @include('partials.form-inputs')
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- section End -->

{{--
<section class="pt-0 category-tools ratio3_2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="slide-4 category-m no-arrow">
                    <div>
                        <div class="category-wrapper pt-0">
                            <div>
                                <div>
                                    <img src="assets/images/tools/category/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                                </div>
                                <h4>auto parts</h4>
                                <ul class="category-link">
                                    <li><a href="#">d1 milano</a></li>
                                    <li><a href="#">damaskeening</a></li>
                                    <li><a href="#">diving watch</a></li>
                                    <li><a href="#">dollar watch</a></li>
                                </ul>
                                <a href="#" class="btn btn-classic btn-outline">view more</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="category-wrapper pt-0">
                            <div>
                                <div>
                                    <img src="assets/images/tools/category/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                                </div>
                                <h4>brakes & steering</h4>
                                <ul class="category-link">
                                    <li><a href="#">Shock-resistant watch</a></li>
                                    <li><a href="#">Skeleton watch</a></li>
                                    <li><a href="#">Slow watch</a></li>
                                    <li><a href="#">Solar-powered watch</a></li>
                                </ul>
                                <a href="#" class="btn btn-outline btn-classic">view more</a>
                            </div>
                        </div>
                    </div>
                    <div class="category-wrapper pt-0">
                        <div>
                            <div>
                                <img src="assets/images/tools/category/3.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <h4>engine & drivetrain</h4>
                            <ul class="category-link">
                                <li><a href="#">Watchmaking conglomerates</a></li>
                                <li><a href="#">Breitling SA</a></li>
                                <li><a href="#">Casio watches</a></li>
                                <li><a href="#">Citizen Watch</a></li>
                            </ul>
                            <a href="#" class="btn btn-outline btn-classic">view more</a>
                        </div>
                    </div>
                    <div class="category-wrapper pt-0">
                        <div>
                            <div>
                                <img src="assets/images/tools/category/4.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <h4>exterior accesories</h4>
                            <ul class="category-link">
                                <li><a href="#">Manufacture d'horlogerie</a></li>
                                <li><a href="#">Mechanical watch</a></li>
                                <li><a href="#">Microbrand watches</a></li>
                                <li><a href="#">MIL-W-46374</a></li>
                            </ul>
                            <a href="#" class="btn btn-outline btn-classic">view more</a>
                        </div>
                    </div>
                    <div class="category-wrapper pt-0">
                        <div>
                            <div>
                                <img src="assets/images/tools/category/5.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <h4>other parts</h4>
                            <ul class="category-link">
                                <li><a href="#">d1 milano</a></li>
                                <li><a href="#">damaskeening</a></li>
                                <li><a href="#">diving watch</a></li>
                                <li><a href="#">dollar watch</a></li>
                            </ul>
                            <a href="#" class="btn btn-outline btn-classic">view more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>--}}
