
<style>
    .navbar-brand{
        font-size: 2rem;
    }
    .btn_navbar a {
        text-decoration:none;
        color: black;
    }
    @media (min-width: 768px) {
        .btn_navbar:hover::after {
            content: "";
            display: block;
            border-bottom: 3px solid #0B63DC;
            width: 60%;
            margin: auto;
            padding-buttom: 10px;
            margin-bottom: -10px;
        }
    }
</style>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
        <a class="navbar-brand" href="{{url('')}}">
            Store
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="dropdown navbar-nav mr-auto ">
                <li class='btn_navbar nav-item mx-2 ' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><a href="{{url('')}}">Categorie</a>
                <div class="dropdown-menu pb-2">
                    <h6 class="dropdown-header" align="center">Pilihan Kopi</h6>
                    @foreach ( $categories as $ctr )
                    <a  class="dropdown-item" href={{url("product/catagorie/$ctr->id")}}>{{$ctr->name}}</a>
                    @endforeach
                </div>
                </li>
                <li class="btn_navbar nav-item mx-2">
                    <a href="{{url('products')}}">Product</a>
                </li>
                <li class="btn_navbar nav-item mx-2">
                    <a href="{{url('aboute')}}">About</a>
                </li>
                <li class="btn_navbar nav-item mx-2">
                    <a href="{{url('cart')}}">Cart</a>
                </li>
            </ul>
            <button class="btn btn-outline-primary my-2 my-sm-0 mx-2">
                @if(session()->has('cart'))
                    Total: {{count(session('cart'))}}
                @else
                    Total: 0
                @endif
            </button>
        </div>
    </nav>
</div>
