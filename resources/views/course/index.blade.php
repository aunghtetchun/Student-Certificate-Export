@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="pb-3">
                <a class="text-uppercase" href="{{ route('home') }}"><i class="feather-home"></i></a>
                <span class="mx-2"><i class="fas fa-angle-right"></i></span>
                <span class="text-uppercase">COURSE</span>
                <span class="mx-2"><i class="fas fa-angle-right"></i></span>
                <span class="text-uppercase">COURSE LIST</span>
            </div>
        </div>
        <div class="col-12">
            <table class="table table-hover table-bordered table-responsive-sm mb-0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Outline</th>
                    <th>Frame</th>
                    <th>Uploader</th>
                    <th>Controls</th>
                    <th>Created At</th>
                </tr>
                </thead>
                <tbody>


                @foreach($courseList as $c)

                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->title }}</td>
                        <td>{{ $c->outline }}</td>
                        <td class="text-center">
                            <a href="{{ asset($c->frame) }}" target="_blank">
                                <span class="badge badge-primary badge-pill px-3 py-2">View</span>
                            </a>
                        </td>
                        <td>
                            {{$c->getAdmin->name}}
                        </td>
                        <td class="control-group" style="vertical-align: middle; text-align: center">
                            <a href="{{ route('course.edit',$c->id) }}" class="btn btn-outline-warning btn-sm">
                                <i class="feather-edit"></i> Edit
                            </a>
                        </td>
                        <td class="no-warp">{{ $c->created_at->diffforhumans()  }}</td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    @include('layouts.toast')
@endsection
@section('foot')
    <script>
        $(".dataTables_length,.dataTables_filter,.dataTable,.dataTables_paginate,.dataTables_info").parent().addClass("px-0");

    </script>
@stop


