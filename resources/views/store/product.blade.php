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

<div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Input product" aria-label="Recipient's username" 
        aria-describedby="button-addon2" id="search" name="search">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
        </div>
      </div>
      <div class="table-responsive"></div>
          <h3 align="center">Total Product:
              <span id="total_record"></span>
          </h3>


{{-- card_product --}}

<div class="cards_product_list">
    @foreach ($product as $item)
    <div class="card_product">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSZLsEuhDI522ip630fc4OtsNUhFw0YcuS6XB3AWsOslPYElbh"
                class="card-img-top" alt="coffe">
            <div class="card-body">
                <p class="card-text">{{$item->name}}</p>
                <h3 class="card-title">{{$item->varian}}</h3>
                <a href="{{route('product.show',$item->id)}}" class="btn btn-primary">Buy Here!</a>
            </div>
        </div>
    @endforeach
    {{-- @for($i=0;$i<9;$i++)
    
    @endfor --}}
</div>

@endsection
