<div class="product-filter-content">
    <div class="search-count">
        <h5>{{trans('app.showing')}} 1-24 of {{$products->count()}} {{trans('app.products')}}</h5></div>
    <div class="collection-view">
        <ul>
            <li><i class="fa fa-th grid-layout-view"></i></li>
            <li><i class="fa fa-list-ul list-layout-view"></i></li>
        </ul>
    </div>
    <div class="collection-grid-view">
        <ul>
            <li><img src="{{ asset('assets/images/icon/2.png') }}" alt="" class="product-2-layout-view"></li>
            <li><img src="{{ asset('assets/images/icon/3.png') }}" alt="" class="product-3-layout-view"></li>
            <li><img src="{{ asset('assets/images/icon/4.png') }}" alt="" class="product-4-layout-view"></li>
            <li><img src="{{ asset('assets/images/icon/6.png') }}" alt="" class="product-6-layout-view"></li>
        </ul>
    </div>
    <div class="product-page-per-view">
        <select>
            <option value="High to low">24 {{trans('app.products-page')}}</option>
            <option value="Low to High">50 {{trans('app.products-page')}}</option>
            <option value="Low to High">100 {{trans('app.products-page')}}</option>
        </select>
    </div>
    <div class="product-page-filter">
        <select>
            <option value="High to low">{{trans('app.sorting')}}</option>
            <option value="Low to High">50 {{trans('app.products')}}</option>
            <option value="Low to High">100 {{trans('app.products')}}</option>
        </select>
    </div>
</div>