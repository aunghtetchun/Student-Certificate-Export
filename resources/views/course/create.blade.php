@extends('layouts.app')

@section('content')
    <div class="row ">
        <div class="col-12">
            <div class="pb-3">
                <a class="text-uppercase" href="{{ route('home') }}"><i class="feather-home"></i></a>
                <span class="mx-2"><i class="fas fa-angle-right"></i></span>
                <span class="text-uppercase">COURSE</span>
                <span class="mx-2"><i class="fas fa-angle-right"></i></span>
                <span class="text-uppercase">ADD COURSE</span>
            </div>
        </div>

        <div class="col-12 col-md-10 col-lg-5">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-uppercase font-weight-bold">
                            <i class="feather-plus-circle text-primary"></i>
                            Add Course
                        </h5>
                        <div class="">
                            <a href="{{ route('course.index') }}" class="btn btn-outline-primary btn-sm">
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
                    <form action="{{ route('course.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-3">
                            <label for="frame">Course Frame</label>
                            <div class="form-inline p-0 d-flex justify-content-center align-items-center">
                                <div class="position-relative">
                                    <button type="button" class="btn btn-light position-absolute edit-photo d-none"
                                            style="bottom: 5px;right: 15px">
                                        <i class="fas fa-upload text-primary"></i>
                                    </button>
                                    <img src=""
                                         style="height: 200px; max-width: 98%;" class="mr-2  current-img" alt="">
                                </div>
                            </div>
                            <input required type="file" name="frame" accept="image/png,image/jpeg" onchange='openFile(event)' class="form-control upload-photo flex-grow-1 p-1 mr-2">

                        </div><br>
                        <div class="form-group">
                            <label for="title">Course Title</label>
                            <input required type="text" class="form-control" name="title" value="{{old('title')}}" id="title">
                        </div>
                        <div class="form-group">
                            <label for="outline">Course Outlines</label>
                            <textarea required id="outline" name="outline" class="form-control">{{old('outline')}}</textarea>
                        </div>
                        <button class="btn btn-primary ">
                            <i class="fas fa-plus-square mr-1"></i>
                            Add Course
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
        $(".edit-photo").click(function () {
            $(".upload-photo").click();
        });

        var openFile = function (event) {
            var input = event.target;

            var reader = new FileReader();
            reader.onload = function () {
                var dataURL = reader.result;
                var output = $(".current-img");
                output.attr("src", dataURL);
            };
            $(".upload-photo").addClass("d-none");
            $(".edit-photo").removeClass("d-none");
            reader.readAsDataURL(input.files[0]);
        };
        $(".table").dataTable({
            "order": [[0, "desc" ]]
        });
    </script>
@stop

