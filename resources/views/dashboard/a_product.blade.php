@extends('tamplates.admin')

@section('title', 'Dashboard')

@section('content')
<section id="product" class="pb-4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">

            <a href="{{url('/dashboard/product/create')}}">
              <button class="btn btn-primary">Tambah Product</button>
            </a><br>
            {{-- @if( Session::has("success"))
              <div class="alert alert-success">
               {{Session::get('success')}}
              </div>
            @endif    
            @if( Session::has("error"))
                 <div class="alert alert-danger">
                                {{Session::get('error')}}
                            </div>
                        @endif<br> --}}
            <div class="table-responsive">
              <table id="table-product" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>image</th>
                    <th>Code</th>
                    <th>Nama Kopi</th>
                    <th>Varian</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th width="200px">action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @foreach ( $products as $product)
                    <td>{{$product->image}}</td>
                    <td>{{$product->code}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->varian}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->stock}}</td>
                    <td>
                      <form action="{{url('dashboard/product',$product->id)}}" method="POST" style='display:inline-block'>
                        @method("delete")
                        @csrf
                        <button class="btn btn-danger" onClick="return confirm('yakin ?')"><i class="fas fa-trash"></i></button>
                      </form>
                      <a href="{{url('dashboard/product',$product->id)}}/edit"><button class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
                    </td>
                  </tr>
                  @endforeach
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop