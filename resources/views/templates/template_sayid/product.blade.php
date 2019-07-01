@extends('templates.master')

@section('title', 'Product')



@section('style')
<style>
.card-product {
    width: 15rem;
    display: inline-flex;
}
.card-product .img-wrap {
    border-radius: 3px 3px 0 0;
    overflow: hidden;
    position: relative;
    height: 220px;
    text-align: center;
}
.card-product .img-wrap img {
    max-height: 100%;
    max-width: 100%;
    object-fit: cover;
}
.card-product .info-wrap {
    overflow: hidden;
    padding: 15px;
    border-top: 1px solid #eee;
}
.card-product .bottom-wrap {
    padding: 15px;
    border-top: 1px solid #eee;
}

.label-rating { margin-right:10px;
    color: #333;
    display: inline-block;
    vertical-align: middle;
}

.card-product .price-old {
    color: #999;
}
</style>
@endsection


@section('content')

<div id="container">
</div>
    <div class="cards_product_list">

        @foreach ($product as $item)
        <figure class="card card-product">
            <div class="img-wrap"><img src="{{url("/product/". $item->image)}}"></div>
            <figcaption class="info-wrap">
                    <h4 class="title">{{$item->name}}</h4>
                    <p class="desc">{{$item->varian}}</p>
                </figcaption>
            <div class="bottom-wrap">
                <a href="{{route('product.show',$item->id)}}" class="btn btn-sm btn-primary float-right">Order Now</a>
                <div class="price-wrap h5">
                    <span class="price-new">Rp. {{$item->price}}</span>
                </div>
            </div>
        </figure>
        @endforeach

            @if( Session::has("success"))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif

            @if( Session::has("error"))
                <div class="alert alert-danger">
                    {{Session::get('error')}}
                </div>
            @endif
    </div>
@endsection
