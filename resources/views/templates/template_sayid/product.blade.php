@extends('templates.master')

@section('title', 'Product')



@section('style')
<style>

    .cards_wrapper {
        display: flex;
        flex-wrap: wrap;
    }
    .card-product {
        width: 15rem;
        margin: .8rem;
    }

    .card-product .title {
        color: black;
        text-decoration: none;
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

    .label-rating {
        margin-right: 10px;
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
<div class="cards_wrapper">

    @foreach ($product as $item)
    <figure class="card card-product">
        <a href="{{url('product/'. $item->id)}}" class="img-wrap"><img src="{{url("/product/". $item->image)}}"></a>
        <figcaption class="info-wrap">
            <a href="{{url('product/'. $item->id)}}" class="title h4">{{$item->name}}</a>
            <p class="desc">{{$item->varian}}</p>
        </figcaption>
        <div class="bottom-wrap">
            <form action="/product/cart/add" method="POST">
                @csrf
                @method('POST')
                <button type="submit" name="id" value="{{$item->id}}" class="btn btn-sm btn-primary float-right">Order
                    Now</button>
            </form>
            <div class="price-wrap h5">
                <span class="price-new">Rp. {{$item->price}}</span>
            </div>
        </div>
    </figure>
    @endforeach
</div>
@endsection
