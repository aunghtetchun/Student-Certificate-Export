@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="pb-3">
                <a class="text-uppercase" href="{{ route('home') }}"><i class="feather-home"></i></a>
                <span class="mx-2"><i class="fas fa-angle-right"></i></span>
                <span class="text-uppercase">ACCESS</span>
                <span class="mx-2"><i class="fas fa-angle-right"></i></span>
                <span class="text-uppercase">ACCESS CREATE</span>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0 text-uppercase font-weight-bold">
                            <i class="feather-plus-circle text-primary"></i>
                            Add Access Form
                        </h5>
                        <div class="">
                            <a href="{{ route('access.create') }}" class="btn btn-outline-primary btn-sm">
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
                    <form action="{{ route('access.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row col-12 p-0 align-items-end">
                            <div class="form-group col-5">
                                <label for="user_id">User Name</label>
                                <select class="custom-select search_user"  name="user_id" style="width: 100%; vertical-align: middle;">
                                    <option selected disabled>Select User Name</option>
                                    @foreach($studentList as $sc)
                                        @if(isset($_GET['user_id']))
                                        <option value="{{$sc->id}}" {{ $_GET['user_id']==$sc->id?"selected":"" }}>{{$sc->name}}</option>
                                        @else
                                            <option value="{{$sc->id}}" >{{$sc->name}}</option>
                                        @endisset
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-5">
                                <label for="batch_id">Batch Number</label>
                                <select class="custom-select search_batch" name="batch_id" style="width: 100%; vertical-align: middle;">
                                    <option selected disabled>Select Batch Number</option>
                                    @foreach($batchList as $b)
                                        <option value="{{$b->id}}">{{$b->batch_number}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <button type="submit" class="btn w-100 btn-primary " ><i class="fas fa-plus-square mr-1"></i> Add Access Form</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    @include('access.list')
                </div>
            </div>
        </div>

    </div>
    @include('layouts.toast')

@endsection
@section('foot')
    <script>
        $('.search_select').select2({

        });
        $('.search_batch').select2({

        });

    </script>
@endsection
