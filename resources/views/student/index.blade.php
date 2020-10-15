@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="pb-3">
                <a class="text-uppercase" href="{{ route('home') }}"><i class="feather-home"></i></a>
                <span class="mx-2">STUDENT <i class="fas fa-angle-right"></i></span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0 text-uppercase font-weight-bold">
                            <i class="feather-shopping-bag text-primary"></i>
                            Student List
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
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Control</th>
                            <th>Created</th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach($studentList as $s)

                            <tr>
                                <td>{{ $s->id }}</td>
                                <td class="text-center">
                                    <img class="rounded-circle" src="{{asset($s->photo)}}" alt="image alt" style="width: 40px; height: 40px;"/>
                                </td>
                                <td>
                                    {{ $s->name }}
                                </td>

                                <td>
                                    {{ $s->email }}
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-primary" href="{{ route('access.create') }}?user_id={{ $s->id }}">To Access</a>
                                </td>
                                <td class="no-warp">{{ $s->created_at->diffforhumans()}}</td>
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
        var t = $(".table").dataTable({
            @isset($_GET['cName'])
            "search": {
                "search": "{{ $_GET['cName'] }}"
            }
            @endisset
        });
    </script>
@endsection

