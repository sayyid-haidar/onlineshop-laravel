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

                                @foreach ($cart_user as $crt_u)
                                <tr>

                                    <td><img src="{{url("product/". $crt_u->product->image)}}" style="width: 50px"></td>
                                    <td>{{$crt_u->product->name}}</td>
                                    <td>{{$crt_u->product->varian}}</td>
                                    <td>{{$crt_u->qty}}</td>
                                    <td>
                                        <a href="" class=" btn btn-warning">CEK</a>
                                    </td>
                                </tr>
                                @endforeach

                                @if(Session::has('cart'))
                                @foreach ($cartSession as $crt_s)
                                <tr>

                                    <td><img src="{{url("product/". $crt_s->image)}}" style="width: 50px"></td>
                                    <td>{{$crt_s->name}}</td>
                                    <td>{{$crt_s->varian}}</td>
                                    <td>{{$crt_s->qty}}</td>
                                    <td>
                                        <a href="" class=" btn btn-warning">CEK</a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif

                            </tbody>
                        </table>

                        @if(count($cart_user) > 0 || Session::has('cart'))
                        <div class="d-flex justify-content-around">
                            <a href="{{url('cart/delete')}}" class="btn btn-danger">Hapus Cart</a>
                            <a href="{{url('checkout')}}" class="btn btn-primary">Chack Out</a>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
