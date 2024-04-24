<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100..700&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: "Anuphan", sans-serif;
            font-size: 14px !important;
        }
        table td{
            font-size: 14px !important;
        }
        table th{
            font-size: 14px !important;
        }
        .active {
            background: #ca4d35 !important;
        }
        .navbar-dark{
            background: #222222 !important;
        }
    </style>

    <!-- Jquery -->
    <script src="{{asset('/js/jquery.js')}}"></script>

    <!-- Font Awesome -->
{{--    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}"/>--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    @yield('style-addon')



    <!-- AdminLTE template -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css?v=3.2.0')}}">


    <title>{{ config('app.name', 'Laravel') }}</title>


{{--    <!-- Scripts -->--}}
{{--@vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
</head>
<body class="sidebar-mini control-sidebar-slide-open layout-navbar-fixed">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"
                ><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">ระบบจัดการโปรโมชั่นสำหรับ บจก. พัมคิน คอร์ปอเรชั่น</a>
            </li>
        </ul>

    </nav>

    @extends('layouts.sidebar')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-bold">@yield('head-page')</h1>
                    </div>
{{--                    <div class="col-sm-6">--}}
{{--                        <ol class="breadcrumb float-sm-right">--}}
{{--                            <li class="breadcrumb-item"><a href="#">บ้าน</a></li>--}}
{{--                            <li class="breadcrumb-item active">Starter Page</li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <aside class="control-sidebar control-sidebar-dark">--}}
{{--        <div class="p-3">--}}
{{--            <h5>Title</h5>--}}
{{--            <p>Sidebar content</p>--}}
{{--        </div>--}}
{{--    </aside>--}}

</div>

<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('dist/js/adminlte.min.js?v=3.2.0')}}"></script>

@yield('script-addon')
</body>
</html>
