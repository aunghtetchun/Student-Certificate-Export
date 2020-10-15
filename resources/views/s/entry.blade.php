@extends('s.app')
@section('title') Certificate Form @endsection
@section("head")
    <style>
        .current-img{
            transition: 0.5s;
        }
        .current-img:active{
            box-shadow: 0 0.2rem 0.5rem rgba(0, 0, 0, 0.15) !important;
            transform: translateY(2px);
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
                        <a class="text-uppercase" href="{{ route('s.rc') }}">
                            Your Certificates
                        </a>
                        <span class="mx-2"><i class="fas fa-angle-right"></i></span>
                        <span class="text-uppercase">Certificate Form</span>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('content')
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0 text-uppercase font-weight-bold text-theme">
                            Certificate Form
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
                            <img src="{{ asset('/s/img/profile.jpg') }}" class="w-100 current-img rounded shadow" alt="">
                            <input required type="file" name="photo" accept="image/png,image/jpeg" onchange='openFile(event)' class="d-none upload-photo">
                        </div>

                        <div class="form-group">
                            <label for="name" class="font-weight-bold text-theme-soft">Your Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="nrc" class="font-weight-bold text-theme-soft">Nrc Number</label>
                            <input type="text" class="form-control" name="nrc" id="nrc" value="{{old('nrc')}}" placeholder="Nrc">
                        </div>


                        <div class="form-group">
                            <input type="hidden" name="access_id" value="{{$access_id}}">
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="isCorrect" required>
                                <label class="custom-control-label" for="isCorrect">အားလုံးမှန်ကန်ပါသည်</label>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-dark">
                                    Submit
                                </button>
                            </div>
                        </div>

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

        let defaultImg = "{{ asset('/s/img/profile.jpg') }}";

        $(".current-img").click(function () {
            $(".upload-photo").click();
        })

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
    </script>
@stop
