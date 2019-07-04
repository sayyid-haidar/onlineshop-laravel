@extends('templates.master')

@section('title', 'Aboute')


@section('style')
<style>

</style>
@endsection

@section('content')
<section id="product" class="pb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <table id="table-product" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Nama Kopi</th>
                                    <th>Varian</th>
                                    <th>Jumlah</th>
                                    <th width="200px">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(Session::has('cart'))
                                    @foreach ($carts as $cart)
                                    <tr>

                                        <td><img src="{{url("product/". $cart->image)}}" style="width: 50px"></td>
                                        <td>{{$cart->name}}</td>
                                        <td>{{$cart->varian}}</td>
                                        <td>{{$cart->qty}}</td>
                                        <td>
                                            <a href="" class=" btn btn-warning">CEK</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>

                        <div class="d-flex justify-content-end">
                            <a href="{{url('cart/delete')}}" class="btn btn-primary">Check Out</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
