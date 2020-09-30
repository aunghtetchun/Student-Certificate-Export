@extends('layouts.app')
@section("head")
    <style>
        /*.card:active{*/
        /*    transform: scale(1.05);*/
        /*    -ms-transform: scale(1.05);*/
        /*    -webkit-transform: scale(1.05);*/
        /*}*/
    </style>
@endsection
@section('content')

@endsection
@section("foot")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    <script src="{{ asset('dashboard/vendor/counter-up/waypoints.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/counter-up/counterup.min.js') }}"></script>
    @include("layouts.reload")
@endsection
