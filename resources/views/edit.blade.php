@extends('master')
@section('content')
    <section class="section-b-space ratio_asos">
        <div id="app">
            <div class="collection-wrapper mt-5 pt-5">
                <div class="container">
                    <div class="row">
                        <div class="collection-content col">
                            <div class="page-main-content">
                                @include('partials.banner-product')
                                <form action="{{route('store.order')}}" method="post">
                                    @csrf()
                                    <input type="hidden" name="orderid" value="{{$order->id}}">
                                    <div class="collection-product-wrapper">
                                        {{--<div class="product-top-filter">
                                            <div class="row">
                                                <div class="col-12">
                                                    @include('partials.product-filter')
                                                </div>
                                            </div>
                                        </div>--}}
                                        <div class="product-wrapper-grid">
                                            <div class="row">
                                                @foreach($products as $product)
                                                    <div class="col-xl-4 col-lg-6 col-grid-box">
                                                        @include('partials.product-box')
                                                    </div>
                                                @endforeach
{{--                                                <div class="container">
                                                    <h2 class="mt-3">{{trans('app.your-total')}} € @{{ sum }}</h2>
                                                    <h3 class="mt-2">{{trans('app.savings')}} € @{{ saving }}</h3>
                                                </div>--}}
                                            </div>
                                        </div>
                                        @if($products->count() > 24)
                                            <div class="product-pagination">
                                                <div class="theme-paggination-block">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                                            {{ $products->links() }}

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


@endsection
