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
                                    <div class="col-lg-4 col-md-6 col-grid-box">
                                        <div class="product-box">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <img src="{{ '/storage/' . $product->image }}" class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>
                                            <div class="product-detail">
                                                <div class="mt-2">
{{--                                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>--}}
                                                    <h6 style="margin-top:30px">{{ $product->name }}</h6>
                                                    <div class="row">
                                                        <div class="product-features">
                                                            <h5>dB: <i>{{$product->db}}</i> Rollwiderstand: <i>{{$product->rolling}}</i> Nasshaftung: <i>{{$product->wet}}</i> Gerauschem: <i>{{$product->gera}}</i></h5>
                                                        </div>
                                                    </div>

                                                    <p>{{ $product->details }}</p>
{{--                                                    <h4>{{ $product->price }}</h4>--}}
                                                    <div class="container mt-2">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <h5>ab 4 Stck</h5>
                                                            </div>
                                                            <div class="col-3">
                                                                <h5>{{ $product->presentPrice('price') }}</h5>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="qty-box">
                                                                    <div class="input-group">
                                                                        <input type="number" name="quantity[{{$product->id}}][price]" class="form-control input-number" value="" min="4" max="7" data-price="{{$product->price}}" data-productid="{{$product->id}}" data-type="price" v-on:change="calcPrices">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-2">
                                                                <h5 id="total-{{$product->id}}-price" class="td-color">0,00</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="container mt-2">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <h5>ab 8 Stck</h5>
                                                            </div>
                                                            <div class="col-3">
                                                                <h5>{{ $product->presentPrice('price8') }}</h5>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="qty-box">
                                                                    <div class="input-group">
                                                                        <input type="number" name="quantity[{{$product->id}}][price8]" class="form-control input-number" value="" min="8" max="11" data-price="{{$product->price8}}" data-productid="{{$product->id}}" data-type="price8" v-on:change="calcPrices">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-2">
                                                                <h5 id="total-{{$product->id}}-price8" class="td-color">0,00</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="container mt-2">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <h5>ab 12 Stck</h5>
                                                            </div>
                                                            <div class="col-3">
                                                                <h5>{{ $product->presentPrice('price12') }}</h5>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="qty-box">
                                                                    <div class="input-group">
                                                                        <input type="number" name="quantity[{{$product->id}}][price12]" class="form-control input-number" value="" min="12" max="100" data-price="{{ $product->price12 }}" data-productid="{{$product->id}}" data-type="price12" v-on:change="calcPrices">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-2">
                                                                <h5 id="total-{{$product->id}}-price12" class="td-color">0,00</h5>
                                                            </div>
                                                        </div>
                                                        <div class="mt-2">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <h4>Tyre24</h4>
                                                                </div>
                                                                <div class="col-4">
                                                                    <input type="hidden" id="{{$product->id}}tyre24" value="{{$product->tyre24}}">
                                                                    <h4>{{ $product->presentPrice('tyre24') }}</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{--<ul class="color-variant">
                                                        <li class="bg-light0"></li>
                                                        <li class="bg-light1"></li>
                                                        <li class="bg-light2"></li>
                                                    </ul>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="container mt-2">
                                        <h2 class="mt-3">{{trans('app.your-total')}} € @{{ sum }}</h2>
                                        <h3 class="mt-2">{{trans('app.savings')}} € @{{ saving }}</h3>
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
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{trans('app.email')}}</label>
                                    <input type="email" name="email" class="form-control @if($errors->has('email')) is-invalid @endif" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{trans('app.placeholder-email')}}" value="{{old('email')}}">
                                    <small id="emailHelp" class="form-text text-muted">{{trans('app.share-policy')}}</small>
                                    @if($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                        @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTel">{{trans('app.kuddennr')}}</label>
                                    <input type="text" name="kuddennr" class="form-control @if($errors->has('kuddennr')) is-invalid @endif" id="exampleInputTel" placeholder="{{trans('app.placeholder-kudden')}}" value="{{old('kuddennr')}}">
                                    @if($errors->has('kuddennr'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('kuddennr') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="info">{{trans('app.info')}}</label>
                                    <input type="text" name="info" class="form-control @if($errors->has('info')) is-invalid @endif" id="info" placeholder="{{trans('app.info')}}" value="{{old('info')}}">
                                    @if($errors->has('info'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('info') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" name="other_address" class="form-check-input" id="other_address" v-model="checked">
                                    <label class="form-check-label" for="other_address">{{trans('app.other_address')}}</label>
                                </div>
                                <div v-if="checked">
                                    <div class="form-group">
                                            <label for="inputEmail4">{{trans('app.name')}}</label>
                                            <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" id="name" name="name" placeholder="{{trans('app.name')}}" value="{{old('name')}}">
                                            @if($errors->has('name'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">{{trans('app.address')}}</label>
                                        <input type="text" class="form-control @if($errors->has('street')) is-invalid @endif" id="inputAddress" name="street" placeholder="{{trans('app.placeholder-street')}}" value="{{old('street')}}">
                                        @if($errors->has('street'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('street') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="inputCity">{{trans('app.city')}}</label>
                                            <input type="text" class="form-control @if($errors->has('city')) is-invalid @endif" name="city" id="inputCity" value="{{old('city')}}">
                                            @if($errors->has('city'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('city') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">{{trans('app.zip')}}</label>
                                            <input type="text" class="form-control @if($errors->has('postindex')) is-invalid @endif" name="postindex" id="inputZip" value="{{old('postindex')}}">
                                            @if($errors->has('postindex'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('postindex') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input @if($errors->has('agb')) is-invalid @endif" name="agb" type="checkbox" value="1" id="agb" checked required>
                                        <label class="form-check-label" for="agb">
                                            {{trans('app.agb')}}
                                        </label>
                                        @if($errors->has('postindex'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('agb')}}
                                        </div>
                                            @endif
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">{{trans('app.submit')}}</button>
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
