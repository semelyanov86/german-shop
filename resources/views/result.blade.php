@extends('master')
@section('content')

<!-- thank-you section start -->
<section class="section-b-space light-layout">
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="success-text"><i class="fa fa-check-circle" aria-hidden="true"></i>
                    {!! $pages[3]->body !!}
                    <p>Order ID: {{$order->id}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->


<!-- order-detail section start -->
<section class="section-b-space">
    <div class="container">
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
                                <h4>quantity</h4>
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
                            <li>subtotal <span>{{$order->presentTotal($total)}}</span></li>
                            <li>{{trans('app.discount')}} <span>{{$order->presentTotal($order->discount)}}</span></li>
                            <li>tax(GST) <span>€0.00</span></li>
                        </ul>
                    </div>
                    <div class="final-total">
                        <h3>total <span>{{$order->presentTotal($total - $order->discount)}}</span></h3></div>
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
                            <li>gerg harvell</li>
                            <li>568, suite ave.</li>
                            <li>Austrlia, 235153</li>
                            <li>Contact No. 987456321</li>
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
        </div>
    </div>
</section>
<!-- Section ends -->

@endsection