@extends('tamplates.master')

@section('title', 'Product')



@section('style')
<style>
    .cards_product_list {
        text-align: center;
    }

    .card_product {
        border: 1px solid black;
        border-radius: 1rem;
        overflow: hidden;
        display: inline-block;
        width: 12rem;
        height: 22rem;
        margin: 5px;
    }

    @media(max-width: 480px){
        .card_product {
            border: 1px solid black;
            border-radius: 1rem;
            overflow: hidden;
            display: inline-block;
            width: 10rem;
            height: 18rem;
        }
    }
</style>
@endsection


@section('content')

<form action="/product/search" method="get">
    <div class="input-group">
        <input type="search" name="search" class="form-control">
        
        <span class="input-group-prepend"> 
            <button type="submit" class="btn btn-primary">Search</button>
        </span>
    </div>
</form>


{{-- <div class="input-group mb-3">
        <input type="text" class="form-control" 
                value="{{ request()->session()->get('search')  }}"
                onkeydown=" if (event.keyCode == 13) ajaxLoad('{{url('post') }}?search='+this.value)"
                id="search"
                name="search"
                placeholder="Input product">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" 
                    onclick="ajaxLoad('{{ url('post') }}?search='+$('#search').val())"
                    type="submit" name="button">
              <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
      <div class="table-responsive"></div>
          <h3 align="center">Total Product:
              <span id="total_record"></span>
          </h3>
 --}}

{{-- card_product --}}

<div id="container">
</div>
    <div class="cards_product_list">
        @foreach ($product as $item)
        <div class="card_product">
                <img src="{{url('')}}/storage/product/{{$item->image}}" style="width : 110px;"
                    class="card-img-top" alt="coffe">
                <div class="card-body">
                    <p class="card-text">{{$item->name}}</p>
                    <h3 class="card-title">{{$item->varian}}</h3>
                    <p class="card-text">Rp. {{$item->price}}</p>
                    <a href="{{route('product.show',$item->id)}}" class="btn btn-primary">Buy Here!</a>
                </div>
            </div>
        @endforeach
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
        {{-- @for($i=0;$i<9;$i++)
        
        @endfor --}}
    </div>
{{-- <script text="text/javascript">
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

keyword.addEventListener('keyup', function () {
    
    var xhr = new XMLHttpRequest;

    xhr.onreadystatechange = function(){
        if (xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    }
    xhr.open('GET', '{{url('/search')}}', true);
    xhr.send();

});


</script> --}}

{{-- <script text="text/javascript">

    function search() {
        
        var search = $('#search').val();
        if (search) {
            $('.cards_product_list').hiden();
            $('.ajax-data').show();
        }
        else{
            $('.cards_product_list').show();
            $('.ajax-data').hiden();
        }

        $.ajax({
            type: "POST",
            url: "{{ url('/search') }}",
            data: {
                search: search,
                __token: $('#signup-token').val()
            },
            dataType: 'html',
            success:function(response){
                console.log(response);
                $('#success').html(response);
            }
        });
    }
</script> --}}

@endsection
