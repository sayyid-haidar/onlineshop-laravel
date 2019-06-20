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
            </a><br><br>
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
                    <td></td>
                    <td>{{$product->code}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->varian}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->stock}}</td>
                    <td>
                      <form action='' method="POST">
                        <button class="btn btn-danger" onClick="return confirm('yakin ?')"><i class="fa fa-trash"></i></button>
                        <a href=''><button class="btn btn-warning">edit</button></a>
                      </form>
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