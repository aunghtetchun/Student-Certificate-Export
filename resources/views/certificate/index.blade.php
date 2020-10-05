@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="pb-3">
                <a class="text-uppercase" href="{{ route('home') }}"><i class="feather-home"></i></a>
                <span class="mx-2">CERTIFICATE <i class="fas fa-angle-right"></i></span>
                <a class="text-uppercase" href="{{ route('certificate.index') }}">CERTIFICATE LIST</a>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0 text-uppercase font-weight-bold">
                            <i class="feather-shopping-bag text-primary"></i>
                            Certificate List
                        </h5>
                        <div class="">
                            <button class="btn btn-outline-secondary btn-sm btn-maximize" title="Maximize">
                                <i class="fas fa-expand-alt fa-fw"></i>
                            </button>
                        </div>
                    </div>
                    <hr>
                    <table class="table  table-bordered table-hover  table-responsive-xl mb-0">
                        <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Nrc</th>
                            <th>Serial Number</th>
                            <th>Batch Name</th>
                            <th>Certificate</th>
                            <th>Control</th>
                            <th>Created</th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach($certificateList as $c)

                            <tr>
                                <td>{{ $c->id }}</td>
                                <td>
                                    <a class="venobox" href="{{asset("/student/original/".$c->photo)}}"><img class="rounded-circle" src="{{asset("/student/thumbnail/".$c->photo)}}" alt="image alt" style="width: 50px; height: 50px;"/></a>
                                </td>
                                <td>
                                    {{ $c->name }}
                                </td>

                                <td>
                                   {{ $c->nrc }}
                                </td>
                                <td>
                                    {{ $c->serial_number }}
                                </td>
                                <td>
                                    {{ $c->getBatch->batch_number }}
                                </td>
                                <td class="text-center">
                                    <a class="venobox" href="{{ asset("/certificate/original/".$c->file) }}" style="height: 95%;">
                                        <button href="" class="btn btn-sm btn-primary text-left" >
                                           View
                                        </button>
                                    </a>
                                    <a href="{{ asset("/certificate/original/".$c->file) }}" download="">
                                        <button href="" class="btn btn-sm btn-outline-primary text-left">
                                            <i class="feather-arrow-down"></i>
                                        </button>
                                    </a>
                                </td>
                                <td class="control-group text-center" style="vertical-align: middle;">
                                    <form action="{{ route('certificate.destroy',$c->id) }}"  method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button href="" class="btn btn-sm btn-outline-danger text-left">
                                            <i class="feather-trash-2"></i>
                                        </button>
                                    </form>
                                </td>
                                <td class="no-warp">{{ $c->created_at->diffforhumans()  }}</td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    @include('layouts.toast')
@endsection
@section('foot')
    <script>
        var t = $(".table").dataTable({
            @isset($_GET['cName'])
            "search": {
                "search": "{{ $_GET['cName'] }}"
            }
            @endisset
        });
    </script>
@endsection

