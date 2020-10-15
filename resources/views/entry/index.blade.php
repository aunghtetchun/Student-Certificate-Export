@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="pb-3">
                <a class="text-uppercase" href="{{ route('home') }}"><i class="feather-home"></i></a>
                <span class="mx-2"><i class="fas fa-angle-right"></i></span>
                <span class="text-uppercase">ENTRY</span>
            </div>
        </div>
        <div class="col-12">
            <table class="table table-hover table-bordered table-responsive-sm mb-0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Nrc</th>
                    <th>Access Id</th>
                    <th class=" ">Controls
                        <a href="{{ route('certificate.storeAll')}}" class="btn ml-3 btn-outline-success approve-all btn-sm">
                            <i class="fas fa-check"></i> Approve All
                        </a>
                    </th>
                    <th>Created At</th>
                </tr>
                </thead>
                <tbody>


                @foreach($entries as $e)

                    <tr>
                        <td>{{ $e->id }}</td>
                        <td class="text-center">
                            <img src="{{ asset("/student/thumbnail/".$e->photo) }}" style="width: 50px; height: 50px;" alt="">
                        </td>
                        <td>{{ $e->name }}</td>
                        <td>{{ $e->nrc }}</td>
                        <td>
                            {{$e->access_id}}
                        </td>
                        <td class=" d-flex h-100" style="vertical-align: middle; text-align: center">
                            <a href="{{ route('certificate.store',$e->id)}}" class="btn btn-outline-success approve btn-sm">
                                <i class="fas fa-check"></i> Approve
                            </a>
                            <form action="{{ route('entry.destroy',$e->id) }}" class="ml-3" method="post">
                                @csrf
                                @method("DELETE")
                                <button href="" class="btn btn-sm btn-outline-danger delete text-left">
                                    <i class="feather-trash-2"></i> Delete
                                </button>
                            </form>
                        </td>
                        <td class="no-warp">{{ $e->created_at->diffforhumans()  }}</td>
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


