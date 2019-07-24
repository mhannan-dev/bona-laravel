<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>@yield('title') - {{config('app.name','Blog')}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- Stylesheets -->

    <link href="{{ asset('assets/frontEnd/common-css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontEnd/common-css/swiper.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontEnd/common-css/ionicons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    @stack('css')


</head>
<body>

@include('layouts.frontEnd.partial.header')

@yield('content')


@include('layouts.frontEnd.partial.footer')


<!-- SCIPTS -->

<script src="{{ asset('assets/frontEnd/common-js/jquery-3.1.1.min.js') }}"></script>

<script src="{{ asset('assets/frontEnd/common-js/tether.min.js') }}"></script>

<script src="{{ asset('assets/frontEnd/common-js/bootstrap.js') }}"></script>

<script src="{{ asset('assets/frontEnd/common-js/swiper.js') }}"></script>

<script src="{{ asset('assets/frontEnd/common-js/scripts.js') }}"></script>
<script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}

<script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{ $error }}','Error',{
        closeButton:true,
        progressBar:true,
    });
    @endforeach
    @endif
</script>

@stack('js')

</body>
</html>

