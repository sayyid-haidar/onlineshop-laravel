@extends('tamplates.master')

@section('title', 'Product')



@section('style')
<style>
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

{{-- card_product --}}

<div class="cards_product_list">
    @for($i=0;$i<9;$i++)
    <div class="card_product">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSZLsEuhDI522ip630fc4OtsNUhFw0YcuS6XB3AWsOslPYElbh"
            class="card-img-top" alt="coffe">
        <div class="card-body">
            <p class="card-text">Coffee</p>
            <h3 class="card-title">Toraja Coffee</h3>
            <a href="{{url('/product/detail')}}" class="btn btn-primary">Buy Here!</a>
        </div>
    </div>
    @endfor
</div>

@endsection
