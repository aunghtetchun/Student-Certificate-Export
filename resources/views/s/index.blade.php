@extends('s.app')
@section('title') Student Dashboard @endsection
@section('content')

    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card v-spacer" onclick="go('{{ route('s.rc') }}')">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center my-0 my-md-2">
                        <div class="">
                            <h1 class="dashboard-count font-weight-bolder text-theme display-4">
                                0{{ Auth::user()->getRc->count() }}
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
            <div class="card v-spacer">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center my-0 my-md-2">
                        <div class="">
                            <h1 class="dashboard-count font-weight-bolder text-theme display-4">
                                0{{ Auth::user()->getCertificate->count() }}
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
                                02
                            </h1>
                            <p class="mb-0 text-theme-soft">Your Project</p>
                        </div>
                        <div class="">
                            <div class="card-icon" style="background: var(--soft-primary)">
                                <i class="fas fa-briefcase card-icon-size text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
