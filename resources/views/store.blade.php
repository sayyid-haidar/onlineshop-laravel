@extends('tamplates.master')

@section('title', 'Store')



@section('style')
<style>
    .header_cards {
        width: 7rem;
        height: 7rem;
        display: inline-block;
        text-align: center;
        line-height: 7rem;
        border-radius: 1rem;
    }

    .cards_product_list {
        text-align: center;
    }

    .card_product {
        border: 1px solid black;
        border-radius: 1rem;
        overflow: hidden;
        display: inline-block;
        width: 12rem;
        height: 22rem;
        margin: 5px;
    }

    @media(max-width: 480px){
        .card_product {
            border: 1px solid black;
            border-radius: 1rem;
            overflow: hidden;
            display: inline-block;
            width: 10rem;
            height: 18rem;
        }
    }
</style>
@endsection

@section('content')

<header class="pt-3">
    <div class="row">
        <div class="col-md-6">
            <div class="jumbotron"
                style="background:url('https://media.gettyimages.com/photos/small-cup-of-coffee-on-bright-yellow-background-picture-id516652078?b=1&k=6&m=516652078&s=612x612&w=0&h=u3NsZvYpO9MMrC6b6NQtx64nVGaYqim0GJHwIWyuu7k=');background-size: cover; height: 25rem;">
                <h1 class="display-4">Welcome to the Store</h1>
            </div>
        </div>
        <div class="col-md-6">
            <div class="jumbotron bg-white">
                @for($i=0;$i<3;$i++) <div class="header_cards border">
                    <a>Cards</a>
            </div>
            @endfor
        </div>
    </div>
</header>

{{-- CARD --}}
<div class="row">
    @for($i=0;$i<4;$i++) <div class="col-md-3">
        <div class="jumbotron">Class</div>
</div>
@endfor
</div>


<div class="row">
    <div class="col-md-6">
        <div class="jumbotron"
            style="background:url('https://media.gettyimages.com/photos/small-cup-of-coffee-on-bright-yellow-background-picture-id516652078?b=1&k=6&m=516652078&s=612x612&w=0&h=u3NsZvYpO9MMrC6b6NQtx64nVGaYqim0GJHwIWyuu7k=');background-size: cover; height: 13rem;">
            <h1 class="display-4">Welcome to the Store</h1>
        </div>
    </div>
    <div class="col-md-6">
        <div class="jumbotron"
            style="background:url('https://media.gettyimages.com/photos/small-cup-of-coffee-on-bright-yellow-background-picture-id516652078?b=1&k=6&m=516652078&s=612x612&w=0&h=u3NsZvYpO9MMrC6b6NQtx64nVGaYqim0GJHwIWyuu7k=');background-size: cover; height: 13rem;">
            <h1 class="display-4">Welcome to the Store</h1>
        </div>
    </div>
</div>

{{-- card_product --}}

<div class="cards_product_list">
    @for($i=0;$i<4;$i++)
    <div class="card_product">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSZLsEuhDI522ip630fc4OtsNUhFw0YcuS6XB3AWsOslPYElbh"
            class="card-img-top" alt="coffe">
        <div class="card-body">
            <p class="card-text">Coffee</p>
            <h3 class="card-title">Toraja Coffee</h3>
            <p class="btn btn-primary">Buy Here!</p>
        </div>
    </div>
    @endfor
</div>

@endsection
