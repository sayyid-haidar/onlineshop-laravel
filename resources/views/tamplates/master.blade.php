<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{url('/favicon.ico')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    {{-- Link Font Google --}}
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

    <title>@yield('title')</title>

    @yield('style')
</head>
<body>

    <div class="container">
        @include('components.navbar')
              <tbody>
                    @yield('content')
              </tbody>
          </div>

    </div>

    @if( Route::is('dashboard','login','register'))
    <footer class="fixed-bottom">
        <div class="container text-center pb-1">
            Made Whit Love for Indonesia
        </div>
    </footer>
    @else
    <footer class="container">
        @include('components.footer')
    </footer>
    @endif
<script>
    $(document).ready(function(){

        fetch_product_data();
        
        function fetch_product_data(query = ''){
            $.ajax({
                url : "{{url('/product/action')}}",
                method : "GET",
                data : {query:query},
                dataType : 'json',
                success : function(data){
                    $('tbody').html(data.table_data);
                    $('#total_records').text(data.total_data);
                    
                }
            });
        }
        $(document).on('keyup', '#search', function(){
            var query = $(this).val();
            fetch_product_data(query); 
        });
    });

</script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
