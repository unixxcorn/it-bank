@extends('layouts.app')
@section('bg')
<img src="/bg/bg.jpg" class="bg-img" />
@endsection
@section('content')
    @php
        use App\Events;
        use App\Statement;
    @endphp
    <div class="row justify-content-center align-self-center full-height" id="content">
        <div class="col-lg-5 col-md-8 col-sm-8 col-xs-12 container card ml-auto line-bottom">
            <div class='subtitle'>
                Faculty detail
            </div>
            <div class="row justify-content-center align-self-center">
                <div class="col-3" align="left">Name</div><div class="col-7" align="left">{{ Auth::user()->name }}</div>
                <div class="col-3" align="left">ID Student</div><div class="col-7" align="left">{{ Auth::user()->id }}</div>
            </div>
        </div>
        <div class="col-lg-5 col-md-8 col-sm-8 col-xs-12 container card mr-auto line-bottom">
            <div class='subtitle'>
                Money History
            </div>
            <div class="row justify-content-center align-self-center">
                <div class="col-4" align="left">Cost of all events</div>
                <div class="col-6" align="left">
                    @php
                        $debts = Events::Where('is_expend', 0)->sum('Money');
                        echo $debts;
                    @endphp
                </div>
                <div class="col-4" align="left">Common Money</div>
                <div class="col-6" align="left">
                    @php
                        $income = Statement::Where('is_expend', 0)->sum('Money');
                        echo $income;
                    @endphp
                </div>
                <div class="col-4" align="left">Your paid</div>
                <div class="col-6" align="left">
                    @php
                        $paid = Statement::Where('uid', Auth::user()->id)->sum('Money');
                        echo $paid;
                    @endphp
                </div>
                <div class="col-4" align="left">Balance</div>
                @if(($debts - $paid) <= 0)
                    <div class="col-6" class="success" align="left" > +{{ ($paid - $debts) }}'</div>
                @else
                    <div class="col-6" class="danger" align="left" >{{ ($paid - $debts) }}</div>
                @endif
            </div>
        </div>
        @if (Auth::user()->level = 1)
            <div class="col-lg-5 col-md-8 col-sm-8 col-xs-12 container card ml-auto line-bottom">
                <div class='subtitle'>
                    Accountant Control Panel
                </div>
                <div class="row justify-content-center align-self-center">
                    <div class="col-5" align="left"><a class="btn btn-primary col-12 mx-auto" style="margin-top:5px;" href="#" class="dehide('New Event', 'hiddenblock');">New Event</a></div>
                    <div class="col-5" align="left"><a class="btn btn-primary col-12 mx-auto" style="margin-top:5px;" href="#" class="dehide('Event', 'hiddenblock');">Event</a></div>
                    <div class="col-5" align="left"><a class="btn btn-primary col-12 mx-auto" style="margin-top:5px;" href="#" class="dehide('Member List', 'hiddenblock');">Member List</a></div>
                    <div class="col-5" align="left"><a class="btn btn-primary col-12 mx-auto" style="margin-top:5px;" href="#" class="dehide('Statement', 'hiddenblock');">Statement</a></div>
                    <div class="col-5" align="left"><a class="btn btn-primary col-12 mx-auto" style="margin-top:5px;" href="#" class="dehide('Payment', 'hiddenblock');">Payment</a></div>
                    <div class="col-5" align="left"><a class="btn btn-primary col-12 mx-auto" style="margin-top:5px;" href="#" class="dehide('Withdraw', 'hiddenblock');">Withdraw</a></div>
                </div>
            </div>
            <div class="col-lg-5 col-md-8 col-sm-8 col-xs-12 container card mr-auto line-bottom ">
                <div class='subtitle'>
                    Event
                </div>
                <div class="row justify-content-center align-self-center">
                    <div class="row col-12 mx-auto hiddenblock">
                        <div class="col-3 mx-auto" align="left">name</div>
                        <div class="col-3 mx-auto" align="left">detail</div>
                        <div class="col-2 mx-auto" align="left">amount</div>
                        <div class="col-1 mx-auto" align="left">create</div>
                        <div class="col-1 mx-auto" align="left">deadline</div>
                        <div class="col-2 mx-auto" align="left">edit</div>
                    </div>
                    @foreach( Events::all() as $event)
                    <div class="row col-12 mx-auto" class="hiddenblock" id="Event">
                        <div class="col-3 mx-auto" align="left">{{ $event['event'] }}</div>
                        <div class="col-3 mx-auto" align="left">{{ $event['description'] }}</div>
                        <div class="col-2 mx-auto" align="left">{{ $event['money'] }}</div>
                        <div class="col-1 mx-auto" align="left">{{ $event['created_at'] }}</div>
                        <div class="col-1 mx-auto" align="left">{{ $event['deadline'] }}</div>
                        <div class="col-2 mx-auto" align="left"><a href="/event/{{ $event['id'] }}" class="material-icons btn btn-secondary col-12" style="font-size:12pt;">edit</a></div>
                    </div>
                    <div class="row col-12 mx-auto" class="hiddenblock" id="New Event">

                    </div>
                    @endforeach
                </div>
            </div>
            @else
            <div class="col-lg-11 col-md-8 col-sm-8 col-xs-12 container card mr-auto line-bottom">
                <div class='subtitle'>
                    Event
                </div>
                <div class="row justify-content-center align-self-center">
                    <div class="row col-12 mx-auto">
                        <div class="col-3 mx-auto" align="left">name</div>
                        <div class="col-3 mx-auto" align="left">detail</div>
                        <div class="col-2 mx-auto" align="left">amount</div>
                        <div class="col-2 mx-auto" align="left">create</div>
                        <div class="col-2 mx-auto" align="left">deadline</div>
                    </div>
                    @foreach( Events::all() as $event)
                    <div class="row col-12 mx-auto">
                        <div class="col-3 mx-auto" align="left">{{ $event['event'] }}</div>
                        <div class="col-3 mx-auto" align="left">{{ $event['description'] }}</div>
                        <div class="col-2 mx-auto" align="left">{{ $event['money'] }}</div>
                        <div class="col-2 mx-auto" align="left">{{ $event['created_at'] }}</div>
                        <div class="col-2 mx-auto" align="left">{{ $event['deadline'] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        @endif
        
    </div>
    <script>
        function dehide(target, group){
            document.getElementByClass(group).style.display = 'none';
            document.getElementById(target).style.display = 'block'; 
        }
    </script>
@endsection
