@extends('layouts.app')
@section('bg')
<img src="/bg/bg.jpg" class="bg-img" />
@endsection
@section('content')
    @php
        use App\Events;
        use App\Statement;
        $events = Events::Where('id', $eid)->select()->first();
    @endphp
    <div class="row justify-content-center align-self-center full-height" id="content">
        @if (Auth::user()->level != 1)
            <div class="row col-lg-5 col-md-8 col-sm-8 col-xs-12 container card ml-auto line-bottom">
                <div class='subtitle col-md-12'>
                    Event : {{$events['event']}}
                </div>
                <div class="col-md-8" style="float:left;">
                    <div class="row justify-content-center align-self-center">
                        <div class="col-3" align="left">Name</div><div class="col-7" align="left">{{$events['event']}}</div>
                        <div class="col-3" align="left">Description</div><div class="col-7" align="left">{{$events['description']}}</div>
                        <div class="col-3" align="left">Create</div><div class="col-7" align="left">{{$events['created_at']}}</div>
                        <div class="col-3" align="left">Deadline</div><div class="col-7" align="left">{{$events['deadline']}}</div>
                    </div>
                </div>
                <div class="col-md-4 subtitle" style="float:left;">
                    <div class="row justify-content-center align-self-center">
                        <div class="col-12" align="center">
                            @if($events['is_expend'] = 0)
                                Deposit
                            @else
                                Withdraw
                            @endif
                        </div>
                        <div class="col-12" align="center">{{$events['money']}}</div>
                    </div>
                </div>
            </div>
        @else
            @include('form.event.edit')
        @endif
    </div>
@endsection
