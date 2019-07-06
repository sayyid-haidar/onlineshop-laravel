@extends('templates.master')

@section('title', 'Product')

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
                    <form action="/product/cart/add" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row" id="countBarang">
                            <div class="col-8">
                                <input name="qty" id="qty" type="number" class="form-control border-dark" value="1"
                                    readonly>
                            </div>
                            <div class="btn-group btn-group-toggle col-4">
                                <a class="btn btn-secondary btn-md" id="minBarang"> - </a>
                                <a class="btn btn-danger btn-md" id="plusBarang"> + </a>
                            </div>
                        </div>
                        <h6 class="card-subtitle text-muted pt-5">Total Pesanan</h6>
                        <h4 class="card-title">Rp, 500.000 <small class="text-muted">( 50.000 x 5 )</small> </h4>

                        <button type="submit" name="id" value="{{$detail->id}}"
                            class="btn btn-block btn-danger float-right">Order Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{url('js/countBarang.js')}}"></script>
@endsection
