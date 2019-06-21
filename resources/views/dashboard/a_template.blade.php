@section('title', 'Dashboard')

@extends('tamplates.admin')
@section('content')
        {{-- <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
      
                  <a href="{{route('Template.store')}}">
                    <button class="btn btn-primary">Tambah Product</button>
                  </a><br><br>
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
                              <button class="btn btn-danger" onClick="return confirm('yakin ?')"><i class="fa fa-trash"></i></button>
                            </form> $nbsp
                          </td>
                        </tr>
                            <a href='{{url('/template/$template->id/edit')}}'>
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
        </div> --}}

        ini template
@endsection