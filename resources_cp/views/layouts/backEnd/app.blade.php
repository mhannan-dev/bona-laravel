<!DOCTYPE HTML>
<html lang="en">
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>@yield('title') - {{config('app.name','Blog')}}</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('assets/backEnd/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('assets/backEnd/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('assets/backEnd/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ asset('assets/backEnd/plugins/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('assets/backEnd/css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('assets/backEnd/css/themes/all-themes.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @stack('stylesheet')


</head>
<body class="theme-red">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
    @include('layouts.backEnd.inc.topBar')
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    @include('layouts.backEnd.inc.left_side_bar')
    <!-- #END# Left Sidebar -->

</section>

<section class="content">

    @yield('content')


</section>

<!-- Jquery Core Js -->
<script src="{{asset('assets/backEnd/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap Core Js -->
<script src="{{asset('assets/backEnd/plugins/bootstrap/js/bootstrap.js')}}"></script>
<!-- Select Plugin Js -->
<script src="{{asset('assets/backEnd/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
<!-- Slimscroll Plugin Js -->
<script src="{{asset('assets/backEnd/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- Waves Effect Plugin Js -->
<script src="{{asset('assets/backEnd/plugins/node-waves/waves.js')}}"></script>

<!-- Custom Js -->
<script src="{{asset('assets/backEnd/js/admin.js')}}"></script>

<!-- Demo Js -->
<script src="{{asset('assets/backEnd/js/demo.js')}}"></script>
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

@stack('scripts')
</body>
</html>


