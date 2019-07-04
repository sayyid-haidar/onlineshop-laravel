@extends('templates.master')

@section('title', 'Product')

@section('style')

@endsection

@section('content')
<div class="row">
    <div class="col-lg-8">
        <img src="{{url("/product/". $detail->image)}}" alt="{{$detail->name}}">
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-catagorie">
                    <div class="btn btn-primary btn-sm">{{$detail->varian}}</div>
                </div>
                <h2 class="card-title pt-3">{{$detail->name}}</h2>
                <p class="card-text">{{$detail->description}}</p>
                <hr>
                <div class="card-price">
                        <h3 class="card-title">Rp, {{$detail->price}}/kg </h3>
                        <div class="row">
                                <div class="col-8">
                                    <input type="text" class="form-control border-dark" placeholder="5 KG">
                                </div>
                                <div class="btn-group btn-group-toggle col-4">
                                    <button class="btn btn-secondary btn-md"> - </button>
                                    <button class="btn btn-danger btn-md"> + </button>
                                </div>
                            </div>
                        <h6 class="card-subtitle text-muted pt-5">Total Pesanan</h6>
                        <h4 class="card-title">Rp, 500.000 <small class="text-muted">( 50.000 x 5 )</small> </h4>
                        <form action="/product/cart/add" method="POST">
                            @csrf
                            @method('POST')
                            <button type="submit" name="id" value="{{$detail->id}}" class="btn btn-block btn-danger float-right">Order Now</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

