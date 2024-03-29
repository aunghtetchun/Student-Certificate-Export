@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="pb-3">
                <a class="text-uppercase" href="{{ route('home') }}"><i class="feather-home"></i></a>
                <span class="mx-2"><i class="fas fa-angle-right"></i></span>
                <span class="text-uppercase">BATCH</span>
                <span class="mx-2"><i class="fas fa-angle-right"></i></span>
                <span class="text-uppercase">EDIT BATCH</span>
            </div>
        </div>
        <div class="col-12 col-xl-7">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0 text-uppercase font-weight-bold">
                            <i class="feather-plus-circle text-primary"></i>
                            Edit Batch
                        </h5>
                        <div class="">
                            <a href="{{ route('batch.index') }}" class="btn btn-outline-primary btn-sm">
                                <i class="feather-list fa-fw"></i>
                            </a>
                        </div>
                    </div>
                    <hr>
                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif
                    <form action="{{ route('batch.update',$batch->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="batch_number">Batch Number</label>
                            <input type="text" class="form-control" name="batch_number" id="batch_number" value="{{ $batch->batch_number }}" placeholder="Batch Number">
                        </div>
                        <div class="form-group">
                            <label for="course_id">Course Name</label>
                            <select class="custom-select" name="course_id">
                                <option selected disabled>Select Course Outline</option>
                                @foreach($courseList as $cl)
                                    <option value="{{ $cl->id }}" {{ $batch->course_id == $cl->id ? "selected":"" }} >{{ $cl->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="start">Stat Date</label>
                                <input type="date" class="form-control" name="start" id="start" min="{{ date("Y-m-d") }}" value="{{ $batch->start }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="end">End Date</label>
                                <input type="date" class="form-control" name="end" id="end" value="{{ $batch->end }}" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-plus-square mr-1"></i>
                            Update Batch
                        </button>
                    </form>

                </div>
            </div>
        </div>

    </div>
    @include('layouts.toast')

@endsection
@section('foot')
    <script>
        $("#start").on("change",function () {
            $("#end").attr("min",$(this).val());
        });
    </script>
@endsection
