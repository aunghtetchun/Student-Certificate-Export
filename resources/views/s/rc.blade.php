@extends('s.app')
@section('content')

    <div class="row justify-content-center vh-100 align-items-center">
        <div class="col-4 ">
            @isset($rc)
                @foreach($rc as $rc)
                    <div class="border border-primary">
                        <div class="card-header">
                            <h5>Hello {{$rc->getStudent->name}}</h5>
                        </div>
                        <div class="card-body">
                            <p>you got certificate for <b>{{$rc->getBatch->batch_number}}</b> batch</p>
                        </div>
                        @if(\App\Entry::where('access_id',$rc->id)->first())
                            Requested
                        @else
                        <div class="card-footer">
                            <a href="{{route('s.entry',$rc->id)}}" class="btn btn-outline-primary">Request Form</a>
                        </div>
                        @endif
                    </div>
                @endforeach
            @endisset
        </div>
    </div>

@endsection
