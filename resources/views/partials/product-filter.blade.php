<div class="product-filter-content">
    <div class="search-count">
        <h5>{{trans('app.showing')}} 1-24 of {{$products->count()}} {{trans('app.products')}}</h5></div>
    <div class="collection-view"></div>
    <div class="collection-grid-view"></div>
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