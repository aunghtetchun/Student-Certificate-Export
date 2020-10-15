@extends('s.app')
@section('title') Certificate For U @endsection
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
                        <span class="text-uppercase">Your Certificates</span>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('content')

    <div class="row">

            @isset($rc)
                @foreach($rc as $r)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card v-spacer">
                        <div class="card-body">
                            <h4 class="text-theme mb-3 font-weight-bold">မင်္ဂလာပါ {{ $r->getStudent->name }}</h4>

                            <p class="text-theme-soft mm-beauty text-justify">
                                {{ date("d M Y",strtotime($r->getBatch->start)) }} မှစတင်တက်ရောက်ခဲ့သော {{ $r->getBatch->getCourse->title }} အတွက် သင်ကြားရေး project အောင်မြင်စွာ ပြုလုပ်နိုင်ခဲ့ ပြီးဖြစ်တဲ့ အတွက် MMS IT မှအသိမှတ်ပြု E certificate ကို စတင်ထုတ်ယူနိုင်ပါပြီခင်ဗျာ။
                            </p>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="">
                                    <p class="mb-0 font-weight-bold text-black-50">
                                        <i class="feather-layers"></i>
                                        {{ $r->getBatch->batch_number }}
                                    </p>
                                </div>
                                <div class="">
                                    @if(\App\Entry::where('access_id',$r->id)->first())
                                        <button href="#" class="btn btn-outline-dark" disabled>
                                            စောင့်ဆိုင်းဆဲ
                                        </button>
                                    @else
                                        <a href="{{route('s.entry',$r->id)}}" class="btn btn-outline-dark">
                                            ထုတ်ယူမယ်
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

            @endisset

            @if(count($rc)==0)

                    <div class="col-12">
                       <div class="card">
                           <div class="card-body">
                               <img src="{{ asset('s/img/no-data.svg') }}" class="w-25 mx-auto d-block mb-4" alt="">
                               <div class="text-center">
                                   <p class="">
                                       မင်္ဂလာပါ {{ Auth::user()->name }} အတွက် Certificate ထုတ်ပေးထာခြင်းမရှိသေးပါ
                                   </p>
                                   <a href="{{ route('s.index') }}" class="btn btn-outline-dark">
                                       <i class="fas fa-home mr-2"></i>
                                       Back to Home
                                   </a>
                               </div>
                           </div>
                       </div>
                    </div>

                @endif

    </div>

    @include("layouts.toast")

@endsection
@section('foot')



@endsection

