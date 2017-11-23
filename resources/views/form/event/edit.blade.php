@extends('layouts.app')
@section('bg')
<img src="/bg/bg.jpg" class="bg-img" />
@endsection
@section('content')
    @php
        use App\Events;
        $events = Events::where('id', $eid)->select()->orderBy('created_at', 'desc')->first();
    @endphp
    <div class="row justify-content-center align-self-center full-height" id="content">
        <div class="row col-lg-5 col-md-8 col-sm-8 col-xs-12 container card ml-auto line-bottom">
            <div class='subtitle col-md-12'>
                Edit Event 
            </div>
            <form method="POST" action="/event/edit" class="row justify-content-center align-self-center col-md-12">
                    <input type="hidden" name="id" value="{{ $eid }}">
                    <div class="col-sm-3" align="left">Event Name</div>
                    <div class="col-sm-7" align="left"><input class="form-control" value="{{ $events['event'] }}" name="event" placeholder="Event's name" /></div>

                    <div class="col-sm-3" align="left">Description</div>
                    <div class="col-sm-7" align="left"><textarea class="form-control" name="description" placeholder="Event for bla bla bla" row="4">{{ $events['description'] }}</textarea></div>

                    <div class="col-sm-3" align="left">State</div>
                    <div class="col-sm-7" align="left">
                        <select class="form-control" name="is_expend" >
                            @if($events['is_expend']==0)
                                <option selected value="0">Deposit</option>
                            @endif
                            
                        </select>
                    </div>

                    <div class="col-sm-3" align="left">Money</div>
                    <div class="col-sm-7" align="left"><input class="form-control" name="money" type="money" placeholder="500" value="{{ $events['money'] }}" /></div>
                    
                    <div class="col-sm-3" align="left">deadline</div>
                    <div class="col-sm-7" align="left"><input class="form-control" name="deadline" type="date" value="{{ $events['deadline'] }}" /></div>
                    
                    {{ csrf_field() }}
                    <div class="col-sm-12" style="margin-top:5px;" align="center">
                        <input class="col-5 btn btn-primary" type="submit" value="Edit" />
                        
                    </div>
            </form>
            <form method="POST" action="/event/destroy" class="row justify-content-center align-self-center col-md-12">
                <input type="hidden" name="id" value="{{ $eid }}">
                {{ csrf_field() }}
                <div class="col-sm-12" style="margin-top:5px;" align="center">
                    <input class="col-5 btn btn-danger" type="submit" value="Destroy" />
                </div>
            </form>
        </div>
    </div>
@endsection
