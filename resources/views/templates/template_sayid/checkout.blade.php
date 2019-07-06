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
                        <section class="pb-4">
                            <div class="container-fluid">
                                <form action="{{url('checkout/addcostumer')}}" method="POST">
                                    @csrf
                                    @method('POST')

                                    <div class="card border-info">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="nama">Nama Penerima</label>
                                                <input type="text" class="form-control form-control-lg" name="nama"
                                                    id="nama" placeholder="Masukan Judul">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control form-control-lg" name="email"
                                                    id="email" placeholder="Masukan Judul">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Nomor Telpon</label>
                                                <input type="number" class="form-control form-control-lg" name="phone"
                                                    id="phone" placeholder="Masukan Judul">
                                            </div>

                                             <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <textarea class="form-control form_input_alamat"
                                                    id="exampleFormControlTextarea1" name="alamat"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-lg btn-block"><i
                                                    class="fa fa-save"></i> SIMPAN</button>
                                        </div>

                                    </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
