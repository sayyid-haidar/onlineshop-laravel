@extends('templates.master')

@section('title', 'Store')

@php
use App\Categorie;
@endphp

@section('style')
<style>
    .header_cards {
        display: inline-block;
        line-height: 7rem;
        background: lightblue;
        height: 7rem;
    }

    .cards_wrapper {
        -webkit-overflow-scrolling: touch;
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        justify-content: center;
    }


    .JumboGambar {
        background-image: url('https://www.finansialku.com/wp-content/uploads/2018/06/Kopi-Termahal-02-Kopi-Finansialku.jpg');
        background-size: cover;
        font-family: 'Lobster', cursive;
        font-size: 19px;
        font-variant: inherit;
        text-shadow: 3px 2px 1px black;
        text-align: center;
    }

    /* Penambahan Style Jumbotron */
    @media(min-width: 768px) {
        .header_cards {
            display: inline-block;
            text-align: center;
            line-height: 7rem;
            background: lightcoral;
        }

        .JumboGambar {
            background-image: url('https://www.finansialku.com/wp-content/uploads/2018/06/Kopi-Termahal-02-Kopi-Finansialku.jpg');
            background-size: cover;
            font-family: 'Lobster', cursive;
            font-size: 24px;
            font-variant: inherit;
            text-shadow: 3px 2px 1px black;
            text-align: center;
        }
    }

    .card-product {
        width: 15rem;
        display: inline-flex;
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
{{-- Buat Pemanggilan Data Dari database --}}
@php
$categories = Categorie::all();
@endphp
{{-- Buat Pemanggilan Data Dari database --}}
<header class="pt-3">
    <div class="row">
        <div class="col-md-6">
            <div class="jumbotron"
                style="background:url('https://media.gettyimages.com/photos/small-cup-of-coffee-on-bright-yellow-background-picture-id516652078?b=1&k=6&m=516652078&s=612x612&w=0&h=u3NsZvYpO9MMrC6b6NQtx64nVGaYqim0GJHwIWyuu7k=');background-size: cover; height: 25rem;">
                <h1 class="display-4">Welcome to the Store</h1>
            </div>
        </div>
        <div class="col-md-6">
            <div class="jumbotron bg-white row">
                @for($i=0;$i<4;$i++) <div class="header_cards col-3 col-md-3">
                    <a>Cards</a>
            </div>
            @endfor
        </div>
    </div>
</header>

{{-- CARD --}}
<div class="row">
    @for($i=0;$i<1;$i++) @foreach ($categories as $categorie) <div class="col-6 col-md-3">
        <div class="jumbotron JumboGambar bg-primary" style="color:yellow;">
            {{ $categorie->name }}</div>
</div>
@endforeach
@endfor
</div>

<div class="row">
    <div class="col-6 col-md-6">
        <div class="jumbotron"
            style="background:url('https://media.gettyimages.com/photos/small-cup-of-coffee-on-bright-yellow-background-picture-id516652078?b=1&k=6&m=516652078&s=612x612&w=0&h=u3NsZvYpO9MMrC6b6NQtx64nVGaYqim0GJHwIWyuu7k=');background-size: cover; height: 13rem;">
            <h1 class="display-6">Welcome to the Store</h1>
        </div>
    </div>
    <div class="col-6 col-md-6">
        <div class="jumbotron"
            style="background:url('https://media.gettyimages.com/photos/small-cup-of-coffee-on-bright-yellow-background-picture-id516652078?b=1&k=6&m=516652078&s=612x612&w=0&h=u3NsZvYpO9MMrC6b6NQtx64nVGaYqim0GJHwIWyuu7k=');background-size: cover; height: 13rem;">
            <h1 class="display-6">Welcome to the Store</h1>
        </div>
    </div>
</div>

{{-- card_product --}}

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
                <button type="submit" onclick="alert('masukan ke keranjang')" name="id" value="{{$item->id}}" class="btn btn-sm btn-primary float-right">Order Now</button>
            </form>
            <div class="price-wrap h5">
                <span class="price-new">Rp. {{$item->price}}</span>
            </div>
        </div>
    </figure>
    @endforeach

</div>

@endsection
