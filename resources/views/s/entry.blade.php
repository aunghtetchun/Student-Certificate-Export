@extends('s.app')
@section('content')
    <div class="row justify-content-center vh-100 align-items-center">
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0 text-uppercase font-weight-bold">
                            <i class="feather-plus-circle text-primary"></i>
                            Add Entry
                        </h5>
                    </div>
                    <hr>
                    @if(\App\Entry::where('access_id',$access_id)->first())
                    Requested
                    @else

                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif
                    <form action="{{ route('e.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="nrc">Your Nrc</label>
                            <input type="text" class="form-control" name="nrc" id="nrc" value="{{old('nrc')}}" placeholder="Nrc">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="access_id" value="{{$access_id}}">
                        </div>
                        <div class="form-group mt-3">
                            <label for="photo">Your Photo</label>
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
                            <input required type="file" name="photo" accept="image/png,image/jpeg" onchange='openFile(event)' class="form-control upload-photo flex-grow-1 p-1 mr-2">

                        </div><br>
                        <button type="submit" class="btn btn-primary " ><i class="fas fa-plus-square mr-1"></i> Submit Entry</button>
                    </form>
                    @endif
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
