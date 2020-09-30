@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="pb-3">
                <a class="text-uppercase" href="{{ route('home') }}"><i class="feather-home"></i></a>
                <span class="mx-2"><i class="fas fa-angle-right"></i></span>
                <span class="text-uppercase">Batch</span>
                <span class="mx-2"><i class="fas fa-angle-right"></i></span>
                <span class="text-uppercase">Add Batch</span>
            </div>
        </div>
        <div class="col-12 col-xl-7">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0 text-uppercase font-weight-bold">
                            <i class="feather-plus-circle text-primary"></i>
                            Add Batch
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
                    <form action="{{ route('batch.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="batch_number">Batch Number</label>
                            <input type="text" class="form-control" name="batch_number" id="batch_number" value="{{old('batch_number')}}" placeholder="Batch Number">
                        </div>
                        <div class="form-group">
                            <label for="course_id">Course Name</label>
                            <select class="custom-select" name="course_id">
                                <option selected disabled>Select Course Outline</option>
                                @foreach($courseList as $cl)
                                    <option value="{{$cl->id}}">{{$cl->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="start">Stat Date</label>
                                <input type="date" class="form-control" name="start" id="start" min="{{ date("Y-m-d") }}" value="{{ old('start') }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="end">End Date</label>
                                <input type="date" class="form-control" name="end" id="end" value="{{ old('end') }}" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary " ><i class="fas fa-plus-square mr-1"></i> Add Batch</button>
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
