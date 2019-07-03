<div class="form-group">
    <label for="exampleInputEmail1">{{trans('app.email')}}</label>
    <input type="email" name="email" class="form-control @if($errors->has('email')) is-invalid @endif" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{trans('app.placeholder-email')}}" value="{{old('email', $order->email)}}">
    <small id="emailHelp" class="form-text text-muted">{{trans('app.share-policy')}}</small>
    @if($errors->has('email'))
        <div class="invalid-feedback">
            {{ $errors->first('email') }}
        </div>
    @endif
</div>
<div class="form-group">
    <label for="exampleInputTel">{{trans('app.kuddennr')}}</label>
    <input type="text" name="kuddennr" class="form-control @if($errors->has('kuddennr')) is-invalid @endif" id="exampleInputTel" placeholder="{{trans('app.placeholder-kudden')}}" value="{{old('kuddennr', $order->kuddennr)}}">
    @if($errors->has('kuddennr'))
        <div class="invalid-feedback">
            {{ $errors->first('kuddennr') }}
        </div>
    @endif
</div>
<div class="form-group">
    <label for="info">{{trans('app.info')}}</label>
    <input type="text" name="info" class="form-control @if($errors->has('info')) is-invalid @endif" id="info" placeholder="{{trans('app.info')}}" value="{{old('info', $order->info)}}">
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
        <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" id="name" name="name" placeholder="{{trans('app.name')}}" value="{{old('name', $order->name)}}">
        @if($errors->has('name'))
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            </div>
        @endif
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputAddress">{{trans('app.address')}}</label>
            <input type="text" class="form-control @if($errors->has('street')) is-invalid @endif" id="inputAddress" name="street" placeholder="{{trans('app.placeholder-street')}}" value="{{old('street', $order->street)}}">
            @if($errors->has('street'))
                <div class="invalid-feedback">
                    {{ $errors->first('street') }}
                </div>
            @endif
        </div>
        <div class="form-group col-md-6">
            <label for="zusatzadress">{{trans('app.zusatzadress')}}</label>
            <input type="text" class="form-control @if($errors->has('zusatzadress')) is-invalid @endif" id="zusatzadress" name="zusatzadress" placeholder="{{trans('app.placeholder-zusatzadress')}}" value="{{old('zusatzadress', $order->zusatzadress)}}">
            @if($errors->has('zusatzadress'))
                <div class="invalid-feedback">
                    {{ $errors->first('zusatzadress') }}
                </div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="inputCity">{{trans('app.city')}}</label>
            <input type="text" class="form-control @if($errors->has('city')) is-invalid @endif" name="city" id="inputCity" value="{{old('city', $order->city)}}">
            @if($errors->has('city'))
                <div class="invalid-feedback">
                    {{ $errors->first('city') }}
                </div>
            @endif
        </div>
        <div class="form-group col-md-4">
            <label for="inputZip">{{trans('app.zip')}}</label>
            <input type="text" class="form-control @if($errors->has('postindex')) is-invalid @endif" name="postindex" id="inputZip" value="{{old('postindex', $order->postindex)}}">
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