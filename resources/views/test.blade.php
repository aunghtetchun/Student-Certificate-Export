<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/feather-icons-web/feather.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/animate_it/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/data_table/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/test.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>
<body>

<div class="container-fluid ">
    <div class="row justify-content-center my-5 ">
        <div class="col-7 d-flex justify-content-center flex-wrap">
            <div class="d-flex flex-wrap justify-content-center align-items-center col-3 mx-4">
                <a href="#" class="btn effect_bth px-3 py-2"><i class="feather-shopping-bag"></i> Last 30 days</a>
            </div>

            <div class=" col-4 d-flex p-3 card_one justify-content-center flex-wrap align-items-center">
                <div class="col-7 d-flex flex-wrap align-items-center card_text">
                    <h1 class="w-100">40</h1>
                    <p>New Messages</p>
                </div>
                <div class="col-5 d-flex align-items-center justify-content-center">
                    <a class="btn p-4 border d-flex justify-content-center align-items-center rounded-circle icon_bg">
                        <i class="feather-shopping-bag icon "></i>
                    </a>
                </div>
            </div>
            <div class="d-flex col-7 my-5 flex-wrap justify-content-around align-items-center">
                <a href="#" class="btn color_btn px-5 py-2">One Year</a>
                <a href="#" class="btn outline_btn px-4 py-2">Three Months</a>
                <a href="#" class="btn bg_bth px-3 py-1">Fulfilled</a>
            </div>
        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="{{ asset('dashboard/js/jquery.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{ asset('dashboard/js/bootstrap.js') }}"></script>
<script src="{{ asset('dashboard/vendor/data_table/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/data_table/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('dashboard/js/app.js') }}"></script>

</body>
</html>
