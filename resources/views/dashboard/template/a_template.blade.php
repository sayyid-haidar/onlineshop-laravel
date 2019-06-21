@section('title', 'Dashboard')

@extends('tamplates.admin')
@section('content')
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
      
                  <a href="{{url('/dashboard/template/create')}}">
                    <button class="btn btn-primary">Tambah Product</button>
                  </a><br><br>
    
                  @if( Session::has("success"))
                      <div class="alert alert-success">
                          {{Session::get('success')}}
                      </div>
                  @endif

                  @if( Session::has("error"))
                      <div class="alert alert-danger">
                          {{Session::get('error')}}
                      </div>
                  @endif
                  <div class="table-responsive">
                    <table id="table-product" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>File</th>
                          <th>Selected</th>
                          <th width="200px">action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          @foreach ( $template as $data)
                          <td>{{$data->name}}</td>
                          <td>{{$data->folder}}</td>
                          <td>{{$data->selected}}</td>
                          <td>
                              <form action='{{url("dashboard/template/$data->id")}}' method="POST">
                                @method("delete")
                                @csrf
                                <button class="btn btn-primary" onClick="return confirm('yakin ?')">
                                    <i class="fa fa-trash"></i>
                                </button>
                              </form>
                              <a href='{{url("dashboard/template/$data->id/edit")}}'>
                                <button class="btn btn-warning">edit</button>
                                </a>
                              
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
@endsection