@extends('s.app')
@section('title') Student Dashboard @endsection
@section('head')
    <style>
        td{
            vertical-align: middle !important;
        }
    </style>
@endsection
@section('content')

    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card v-spacer" onclick="go('{{ route('s.rc') }}')">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center my-0 my-md-2">
                        <div class="">
                            <h1 class="dashboard-count font-weight-bolder text-theme display-4">
                                {{ Auth::user()->getRc->count() }}
                            </h1>
                            <p class="mb-0 text-theme-soft">Certificate For You</p>
                        </div>
                        <div class="">
                            <div class="card-icon" style="background: var(--soft-warning)">
                                <i class="fas fa-box card-icon-size text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card v-spacer" onclick="go(`{{ route('s.list') }}`)">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center my-0 my-md-2">
                        <div class="">
                            <h1 class="dashboard-count font-weight-bolder text-theme display-4">
                                {{ Auth::user()->getCertificate->count() }}
                            </h1>
                            <p class="mb-0 text-theme-soft">Your Certificate</p>
                        </div>
                        <div class="">
                            <div class="card-icon" style="background: var(--soft-success)">
                                <i class="fas fa-file-alt card-icon-size text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
            <div class="card v-spacer">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center my-0 my-md-2">
                        <div class="">
                            <h1 class="dashboard-count font-weight-bolder text-theme display-4">
                                {{ \App\User::count() }}
                            </h1>
                            <p class="mb-0 text-theme-soft">Our Students</p>
                        </div>
                        <div class="">
                            <div class="card-icon" style="background: var(--soft-primary)">
                                <i class="fas fa-users card-icon-size text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between align-items-center mb-3">
                        <div class="col-12 col-md-6 mb-3 mb-md-0">
                            <h4 class="text-theme font-weight-bold mb-0 text-theme">
                                <i class="feather-layers fa-fw"></i>
                                Available Course
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
                            <small class="font-weight-bold mb-2">Finished Course {{ $p }}%</small>
                            <div class="progress" style="height: 7px">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: {{ $p }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover table-responsive-md mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Course Title</th>
                            <th>Latest Batch</th>
                            <th>Start Date</th>
                            <th>Detail</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php

                        $finishCourse = [];
                        foreach ($certificateList as $c){
                            $courseId = $c->getBatch->getCourse->id;
                            array_push($finishCourse,$courseId);
                        }

                        @endphp
                        @foreach(\App\Course::latest()->get() as $no=>$l)
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td class="font-weight-bold">{{ $l->title }}</td>
                                <td class="text-nowrap">
                                    {{ $l->getBatch->last()->batch_number }}
                                    <br>
                                    <small class="text-theme-soft">{{ date("d M Y",strtotime($l->getBatch->last()->start)) }} - {{ date("d M Y",strtotime($l->getBatch->last()->end)) }}</small>
                                </td>
                                <td>{!! in_array($l->id,$finishCourse)? '<span class="badge badge-primary badge-pill px-3 py-2 text-white">အောင်မြင်ပြီး</span>' : '<span class="badge badge-info badge-pill px-3 py-2 text-white">မတက်ရသေးပါ</span>'  !!}</td>
                                <td>
                                    <a href="#" class="btn btn-outline-dark" download="true">
                                        View
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>

@endsection
