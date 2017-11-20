@extends('layouts.app')
@section('bg')
<img src="/bg/bg.jpg" class="bg-img" />
@endsection
@section('content')
    @php
        use App\Events;
        $events = Events::where('id', '!=', '0')->select()->orderBy('created_at', 'desc')->first();
    @endphp
    <div class="row justify-content-center align-self-center full-height" id="content">
    <div class="row col-lg-5 col-md-8 col-sm-8 col-xs-12 container card ml-auto line-bottom">
            <div class='subtitle col-md-12'>
                Lastest Event 
            </div>
            <form method="POST" action="/event/store" class="row justify-content-center align-self-center col-md-12">
                    <div class="col-sm-3" align="left">Event Name</div>
                    <div class="col-sm-7" align="left">{{ $events['event'] }}</div>

                    <div class="col-sm-3" align="left">Description</div>
                    <div class="col-sm-7" align="left">{{ $events['description'] }}</div>

                    <div class="col-sm-3" align="left">State</div>
                    <div class="col-sm-7" align="left">
                        @if($events['is_expend']==0)
                            Deposit
                        @else
                            Withdraw
                        @endif
                    </div>

                    <div class="col-sm-3" align="left">Money</div>
                    <div class="col-sm-7" align="left">{{ $events['money'] }}</div>
                    
                    <div class="col-sm-3" align="left">deadline</div>
                    <div class="col-sm-7" align="left">{{ $events['deadline'] }}</div>

            </form>
        </div>
        <div class="row col-lg-5 col-md-8 col-sm-8 col-xs-12 container card ml-auto line-bottom">
            <div class='subtitle col-md-12'>
                New Event 
            </div>
            <form method="POST" action="/event/store" class="row justify-content-center align-self-center col-md-12">
                    <div class="col-sm-3" align="left">Event Name</div>
                    <div class="col-sm-7" align="left"><input class="form-control" name="event" placeholder="Event's name" /></div>

                    <div class="col-sm-3" align="left">Description</div>
                    <div class="col-sm-7" align="left"><textarea class="form-control" name="description" placeholder="Event for bla bla bla" row="4"></textarea></div>

                    <div class="col-sm-3" align="left">State</div>
                    <div class="col-sm-7" align="left">
                        <select class="form-control" name="is_expend" placeholder="">
                            <option value="0">Deposit</option>
                            <option value="1">Withdraw</option>
                        </select>
                    </div>

                    <div class="col-sm-3" align="left">Money</div>
                    <div class="col-sm-7" align="left"><input class="form-control" name="money" type="money" placeholder="500" /></div>
                    
                    <div class="col-sm-3" align="left">deadline</div>
                    <div class="col-sm-7" align="left"><input class="form-control" name="deadline" type="date" placeholder="" /></div>
                    
                    {{ csrf_field() }}
                    <div class="col-sm-12" style="margin-top:5px;" align="center"><input class="col-6 btn btn-primary" type="submit" /></div>
            </form>
        </div>
    </div>
@endsection
