@extends('master')
@section('content')

    @if($order->placed > 0)

@include('partials.thank-you')

@endif

<!-- order-detail section start -->
<section class="section-b-space">
    <div class="container @if($order->placed < 1) mt-5 pt-5 @endif">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-order">
                    <h3>{{ $pages[3]->excerpt }}</h3>
                    @foreach($products as $product)
                    <div class="row product-order-detail">
                        <div class="col-3"><img src="/storage/{{$product->image}}" alt="" class="img-fluid blur-up lazyload"></div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>product name</h4>
                                <h5>{{$product->name}}</h5></div>
                        </div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>{{trans('app.quantity')}}</h4>
                                <h5>{{$product->pivot->quantity}}</h5></div>
                        </div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>price</h4>
                                <h5>{{$product->presentPrice($product->pivot->type)}}</h5></div>
                        </div>
                    </div>
                    @endforeach
                    <div class="total-sec">
                        <ul>
                            <li>{{trans('app.subtotal')}} <span>{{$order->presentTotal($total)}}</span></li>
                            <li>{{trans('app.discount')}} <span>{{$order->presentTotal($order->discount)}}</span></li>
                            <li>{{trans('app.tax')}} <span>{{$order->presentTotal($order->tax)}}</span></li>
                        </ul>
                    </div>
                    <div class="final-total">
                        <h3>{{trans('app.total')}} <span>{{$order->presentTotal($order->final_total)}}</span></h3></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row order-success-sec">
                    <div class="col-sm-6">
                        <h4>summery</h4>
                        <ul class="order-detail">
                            <li>order ID: {{$order->id}}</li>
                            <li>Order Date: {{$order->created_at}}</li>
                            <li>Order Total: {{$order->presentTotal($total)}}</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h4>shipping address</h4>
                        <ul class="order-detail">
                            @if($order->other_address)
                            <li>{{$order->name}}</li>
                            <li>{{$order->street}}</li>
                            <li>{{$order->city}}, {{$order->postindex}}</li>
                            <li>{{trans('app.kuddennr')}}: {{$order->kuddennr}}</li>
                                @else
                            <li>{{trans('app.same')}}</li>
                                @endif
                        </ul>
                    </div>
                    <div class="col-sm-12 payment-mode">
                        <h4>payment method</h4>
                        <p>{{$pages[3]->meta_description}}</p>
                    </div>
                    <div class="col-md-12">
                        <div class="delivery-sec">
                            <h3>expected date of delivery</h3>
                            <h2>{{$order->delivery_date}}</h2></div>
                    </div>
                </div>
            </div>
            @if($order->placed < 1)
            <div class="col-md-12 mt-2">
                <a href="{{route('store.edit', $order->id)}}" role="button" class="btn btn-secondary">{{trans('app.edit')}}</a>
                <a href="{{route('store.place', $order->id)}}" role="button" class="btn btn-success">{{trans('app.place')}}</a>
            </div>
                @else
                <div class="col-md-12 mt-2">
                <p>{{trans('app.already-placed')}}</p>
                </div>
            @endif
        </div>
    </div>
</section>
<!-- Section ends -->

@endsection