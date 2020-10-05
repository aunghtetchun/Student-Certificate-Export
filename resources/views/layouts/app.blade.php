<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ \App\Custom::$info['short_name'] }} Chat Bot</title>

    <link rel="icon" href="{{ asset(\App\Custom::$info['c-logo']) }}">
    <link rel="stylesheet" href="{{ asset(\App\Custom::$info['main_css']) }}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/feather-icons-web/feather.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/animate_it/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/data_table/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/venobox/venobox.css') }}">


    @yield('head')
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <!--        aside left start -->
            <div class="col-12 col-md-6 col-lg-3 col-xl-2 vh-100 aside-menu p-0">
                @include('layouts.nav')
            </div>
            <!--        aside left end -->
            <div class="col-12 col-md-12 col-lg-9 col-xl-10 vh-100 mt-2 content">
                <div class="container-fluid">
                    <div class="row">


                        <!-- content start-->
                        <div class="col-12 px-0">
                            @include('layouts.header')
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 loader">
                                        <div class="d-flex justify-content-center align-items-center vh-100 ">
                                            <div class="spinner-grow text-primary" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 px-0 py-3 min-vh-100 page-content" style="display: none">
                                        <!--                                    card area start-->
                                        @yield('content')
                                        <!--                                    card area end-->
                                    </div>

                                    <div class="col-12 p-0 mt-3">
                                        <div class="alert-secondary  rounded d-flex flex-column flex-md-row justify-content-between text-secondary py-2 px-3">
                                            <div>
                                                Copy Right @ {{ \App\Custom::$info['short_name'] }} {{ date("Y") }}
                                            </div>
                                            <div>
                                                Developed By <a class="text-primary font-weight-bold" href="http://mms-it.com">MMS IT</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--content end                    -->

                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Scripts -->
    <script src="{{ asset('dashboard/js/jquery.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ asset('dashboard/js/bootstrap.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/data_table/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/data_table/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/app.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/venobox/venobox.js') }}"></script>


    @yield('foot')
    <script>
        $('.venobox').venobox({                        // default: ''
            frameheight: screen.height-200,                                   // default: false
        });
        $(".dataTables_length,.dataTables_filter,.dataTable,.dataTables_paginate,.dataTables_info").parent().addClass("px-0");
    </script>
</body>
</html>
