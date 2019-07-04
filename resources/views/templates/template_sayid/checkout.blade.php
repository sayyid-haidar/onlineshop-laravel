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
                  <div class="table-responsive pt-4">
                    <table id="table-product" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>image</th>
                          <th>Nama Kopi</th>
                          <th>Varian</th>
                          <th>Jumlah</th>
                          <th width="200px">action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>

                          <td><img src="" style="width: 50px"></td>
                          <td>Nama</td>
                          <td>Jumlah</td>
                          <td>stock</td>
                          <td>
                            <a href="""><button class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
                          </td>
                        </tr>
                    </table>
                    {{-- Pemanggilan Paginate dibuat 3 data --}}
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary">Check Out</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
