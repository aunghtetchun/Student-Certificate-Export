@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="pb-3">
                <a class="text-uppercase" href="{{ route('home') }}"><i class="feather-home"></i></a>
                <span class="mx-2"><i class="fas fa-angle-right"></i></span>
                <span class="text-uppercase">BATCH</span>
                <span class="mx-2"><i class="fas fa-angle-right"></i></span>
                <a class="text-uppercase" href="{{ route('batch.index') }}">BATCH LIST</a>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0 text-uppercase font-weight-bold">
                            <i class="feather-shopping-bag text-primary"></i>
                            Batch List
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
                            <th>Batch Number</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Uploader</th>
                            <th>Course</th>
                            <th>Control</th>
                            <th>Created</th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach($batchList as $b)

                            <tr>
                                <td>{{ $b->id }}</td>

                                <td>
                                    <div class="d-flex align-items-center no-warp">
                                        <span>{{ $b->batch_number }}</span>
                                    </div>
                                </td>
                                <td>
                                    {{ $b->start }}
                                </td>
                                <td>
                                    {{ $b->end }}
                                </td>
                                <td>
                                    {{ $b->getAdmin->name }}
                                </td>
                                <td>
                                    {{ $b->getCourse->title }}
                                </td>
                                <td class="control-group" style="vertical-align: middle; text-align: center">
                                    <a href="{{ route('batch.edit',$b->id) }}" class="btn btn-outline-warning btn-sm">
                                        <i class="feather-edit"></i> Edit
                                    </a>
                                </td>
                                <td class="no-warp">{{ $b->created_at->diffforhumans()  }}</td>
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
        $(".table").dataTable({
            responsive:true,
            sort:false,
        });


    </script>
@endsection

