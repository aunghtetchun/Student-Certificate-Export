<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset(\App\Custom::$info['c-logo']) }}">
    <link rel="stylesheet" href="{{ asset(\App\Custom::$info['main_css']) }}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/feather-icons-web/feather.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/animate_it/animate.css')}}">
{{--    <link rel="stylesheet" href="{{ asset('dashboard/css/summernote-bs4.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('dashboard/vendor/data_table/dataTables.bootstrap4.min.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/venobox/venobox.css') }}">

    <link rel="stylesheet" href="{{ asset('s/css/style.css') }}">

    @yield('head')
</head>
<body >

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="d-flex align-items-center justify-content-between v-spacer">
                <div class="d-flex align-items-center">
                    <div class="mr-2">
                        <img src="{{ Auth::user()->photo }}" class="rounded-circle profile-img-sm" alt="">
                    </div>
                    <div class="">
                        <p class="mb-0 font-weight-bold">{{ Auth::user()->name }}</p>
                        <small class="text-email-small my-0">{{ Auth::user()->email }}</small>
                    </div>
                </div>
                <div class="">
                    @include("s.nav")
                </div>
            </div>
        </div>
    </div>
    @yield("page-link")
    @yield("content")
</div>
<div class="py-5"></div>

<!-- Scripts -->
<script src="{{ asset('dashboard/js/jquery.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{ asset('dashboard/js/bootstrap.js') }}"></script>
<script src="{{ asset('dashboard/vendor/venobox/venobox.js') }}"></script>

{{--<script src="{{ asset('dashboard/vendor/data_table/jquery.dataTables.min.js') }}"></script>--}}
{{--<script src="{{ asset('dashboard/vendor/data_table/dataTables.bootstrap4.min.js') }}"></script>--}}
<script src="{{ asset('s/js/app.js') }}"></script>

@yield('foot')

</body>
</html>
