@extends('s.app')
@section('title') Certificate List @endsection
@section("head")
    <style>
        td{
            vertical-align: middle !important;
        }
    </style>
    @endsection
@section('page-link')

    <div class="row">
        <div class="col-12">
            <div class="card v-spacer">
                <div class="card-body">
                    <div class="mb-0">
                        <a class="text-uppercase" href="{{ route('s.index') }}">
                            <i class="fas fa-home fa-fw"></i>
                        </a>
                        <span class="mx-2"><i class="fas fa-angle-right"></i></span>
                        <span class="text-uppercase">List</span>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card v-spacer">
                <div class="card-body">
                    <div class="row justify-content-between align-items-center mb-3">
                       <div class="col-12 col-md-6 mb-3 mb-md-0">
                           <h4 class="text-theme font-weight-bold mb-0 text-theme">
                               <i class="fas fa-file-alt fa-fw"></i>
                               Certificate List
                           </h4>
                       </div>
                        <div class="col-md-4 col-lg-3">
                            @php

                            $certificateList = Auth::user()->getCertificate;
                            $total = \App\Course::count();
                            $currentOwn = $certificateList->count();
                            $percentage = ceil(($currentOwn/$total)*100);
                            $p = $percentage>100 ? 100 : $percentage;

                            @endphp
                            <small class="font-weight-bold mb-2">Learn Progress {{ $p }}%</small>
                            <div class="progress" style="height: 7px">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: {{ $p }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover table-responsive-md mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Course</th>
                            <th>Batch</th>
                            <th>Verify Code</th>
                            <th>Control</th>
                        </tr>
                        </thead>
                        <tbody>
                        @isset(Auth::user()->getCertificate)
                            @foreach(Auth::user()->getCertificate as $no=>$l)
                                <tr>
                                    <td>{{ $no+1 }}</td>
                                    <td>{{ $l->getBatch->getCourse->title }}</td>
                                    <td>{{ $l->getBatch->batch_number }}</td>
                                    <td class="font-weight-bold">{{ $l->serial_number }}</td>
                                    <td class="text-nowrap">
                                        <a class="venobox btn btn-dark" data-gall="myCertificate" href="{{ asset("/certificate/mini/".$l->file) }}">
                                            view
                                        </a>
                                        <a href="{{ asset("certificate/original/".$l->file) }}" class="btn btn-outline-dark" download="true">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endisset
                        </tbody>
                    </table>
                </div>

            </div>
        </div>



    </div>

    @include("layouts.toast")

@endsection
@section('foot')


    <script>
        $('.venobox').venobox({
            frameheight: screen.height-200,
        });
    </script>
@endsection

