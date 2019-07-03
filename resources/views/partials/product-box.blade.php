<div class="product-box">
    <div class="img-wrapper">
        <div class="front">
            <img src="{{ '/storage/' . $product->image }}" class="img-fluid blur-up lazyload" alt="">
        </div>
    </div>
    <div class="product-detail">
        <div class="mt-2">
            {{--                                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>--}}
            <h6 style="min-height:60px;margin-top:40px">{{ $product->name }}</h6>
            <div class="row">
                <div class="product-features">
                    <h5>Rollwiderstand: <i>{{$product->rolling}}</i> Nasshaftung: <i>{{$product->wet}}</i> Gerauschem: <i>{{$product->gera}}</i> dB: <i>{{$product->db}}</i></h5>
                </div>
            </div>

            <p>{{ $product->details }}</p>
            {{--                                                    <h4>{{ $product->price }}</h4>--}}
            <div class="container mt-2">
                <div class="row">
                    <div class="col-3">
                        <h5>ab 4 Stck</h5>
                    </div>
                    <div class="col-3">
                        <h5>{{ $product->presentPrice('price') }}</h5>
                    </div>
                    <div class="col-3">
                        <div class="qty-box">
                            <div class="input-group">
                                <input type="number" name="quantity[{{$product->id}}][price]" class="form-control input-number" @if($product->pivot && $product->pivot->type == 'price') value="{{$product->pivot->quantity}}" @else value="" @endif min="4" max="7" data-price="{{$product->price}}" data-productid="{{$product->id}}" data-type="price" v-on:change="calcPrices">
                            </div>
                        </div>

                    </div>
                    <div class="col-3">
                        <h5 id="total-{{$product->id}}-price" class="td-color">@if($product->pivot && $product->pivot->type == 'price') {{$order->presentTotal($product->price * $product->pivot->quantity)}} @else 0.00 @endif</h5>
                    </div>
                </div>
            </div>
            <div class="container mt-2">
                <div class="row">
                    <div class="col-3">
                        <h5>ab 8 Stck</h5>
                    </div>
                    <div class="col-3">
                        <h5>{{ $product->presentPrice('price8') }}</h5>
                    </div>
                    <div class="col-3">
                        <div class="qty-box">
                            <div class="input-group">
                                <input type="number" name="quantity[{{$product->id}}][price8]" class="form-control input-number" @if($product->pivot && $product->pivot->type == 'price8') value="{{$product->pivot->quantity}}" @else value="" @endif min="8" max="11" data-price="{{$product->price8}}" data-productid="{{$product->id}}" data-type="price8" v-on:change="calcPrices">
                            </div>
                        </div>

                    </div>
                    <div class="col-3">
                        <h5 id="total-{{$product->id}}-price8" class="td-color">@if($product->pivot && $product->pivot->type == 'price8') {{$order->presentTotal($product->price8 * $product->pivot->quantity)}} @else 0.00 @endif</h5>
                    </div>
                </div>
            </div>
            <div class="container mt-2">
                <div class="row">
                    <div class="col-3">
                        <h5>ab 12 Stck</h5>
                    </div>
                    <div class="col-3">
                        <h5>{{ $product->presentPrice('price12') }}</h5>
                    </div>
                    <div class="col-3">
                        <div class="qty-box">
                            <div class="input-group">
                                <input type="number" name="quantity[{{$product->id}}][price12]" class="form-control input-number" @if($product->pivot && $product->pivot->type == 'price12') value="{{$product->pivot->quantity}}" @else value="" @endif min="12" max="100" data-price="{{ $product->price12 }}" data-productid="{{$product->id}}" data-type="price12" v-on:change="calcPrices">
                            </div>
                        </div>

                    </div>
                    <div class="col-3">
                        <h5 id="total-{{$product->id}}-price12" class="td-color">@if($product->pivot && $product->pivot->type == 'price12') {{$order->presentTotal($product->price12 * $product->pivot->quantity)}} @else 0.00 @endif</h5>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-3">
                            <h4>Tyre24</h4>
                        </div>
                        <div class="col-3">
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