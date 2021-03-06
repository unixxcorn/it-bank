@extends('layouts.app')
@section('bg')
<img src="/bg/bg.jpg" class="bg-img" />
@endsection
@section('content')
    @php
        use App\User;
        use App\Events;
        use App\Statement;
	$debts = Events::Where('is_expend', 0)->sum('Money');
	$member = User::count();
	$paid = Statement::Where('uid', Auth::user()->id)->sum('Money');
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
		<div class="col-4" align="left">Common Money</div>
		<div class="col-6" align="right">
		    @php
			$income = Statement::Where('is_expend', 0)->sum('Money');
			$common_money = $income - $debts;
			if ($common_money < 0) {
			    echo 0;
			}
			else {
			    echo $common_money;
			}
		    @endphp
		</div>
		<div class="col-4" align="left">Balance</div>
		<div class="col-6" align="right">
		    @php
			if ($common_money < 0) {
			    echo abs($common_money);
			}
			else {
			    echo 0;
			}
		    @endphp
		</div>

                <div class="col-4" align="left">All Event Money</div>
                <div class="col-6" align="right">
                    @php
                        echo $debts;
                    @endphp
                </div>
                <div class="col-4" align="left">All Event Money per person</div>
                <div class="col-6" align="right">
                    @php
                        echo round(($debts / $member),0,PHP_ROUND_HALF_UP);
                    @endphp
                </div>
                <div class="col-4" align="left">Your paid</div>
                <div class="col-6" align="right">
                    @php
                        $paid = Statement::Where('uid', Auth::user()->id)->sum('Money');
                        echo $paid;
                    @endphp
                </div>
                <div class="col-4" align="left">Number of members</div>
                <div class="col-6" align="right">
                    {{User::count()}}
                </div>
		<div class="col-4" align="left">Your balance</div>
		<div class="col-6" align="right">
		    @php
			$all_debts = Events::Where('is_expend', 0)->sum('Money');
			$your_balance = round(($paid - ($all_debts / $member)),0,PHP_ROUND_HALF_UP);
			if ($your_balance > 0) {
			    echo '+'.$your_balance;
			}
			else {
			    echo $your_balance;
			}
		    @endphp
		</div>
            </div>
        </div>
        @if (Auth::user()->level == 1)
            <div class="col-lg-5 col-md-8 col-sm-8 col-xs-12 container card ml-auto line-bottom">
                <div class='subtitle'>
                    Accountant Control Panel
                </div>
                <div class="row justify-content-center align-self-center">
                    <div class="col-7" align="left"><a class="btn btn-primary col-12 mx-auto" style="margin-top:5px;" href="{{ route('newevent') }}">New Deposit</a></div>
                    <div class="col-7" align="left"><a class="btn btn-primary col-12 mx-auto" style="margin-top:5px;" href="{{ route( 'member' ) }}">Member List</a></div>
                    <div class="col-7" align="left"><a class="btn btn-primary col-12 mx-auto" style="margin-top:5px;" href="{{ route( 'statement' ) }}">Statement</a></div>
                </div>
            </div>
            <div class="col-lg-5 col-md-8 col-sm-8 col-xs-12 container card mr-auto line-bottom ">
                <div class='subtitle'>
                    Event
                </div>
                <div class="row justify-content-center align-self-center">
                    <div class="row col-12 mx-auto hiddenblock">
                        <div class="col-3 mx-auto" align="left">Name</div>
                        <div class="col-3 mx-auto" align="left">Detail</div>
                        <div class="col-2 mx-auto" align="left">Amount</div>
                        <div class="col-2 mx-auto" align="left">Deadline</div>
                        <div class="col-2 mx-auto" align="left">Edit</div>
                    </div>
                    @foreach( Events::all() as $event)
                    <div class="row col-12 mx-auto" class="hiddenblock" id="Event">
                        <div class="col-3 mx-auto" align="left">{{ $event['event'] }}</div>
                        <div class="col-3 mx-auto" align="left">{{ $event['description'] }}</div>
                        <div class="col-2 mx-auto" align="left">{{ $event['money'] }}</div>
                        <div class="col-2 mx-auto" align="left">{{ $event['deadline'] }}</div>
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
                        <div class="col-4 mx-auto" align="left">detail</div>
                        <div class="col-2 mx-auto" align="left">amount</div>
                        <div class="col-3 mx-auto" align="left">deadline</div>
                    </div>
                    @foreach( Events::all() as $event)
                    <div class="row col-12 mx-auto">
                        <div class="col-3 mx-auto" align="left">{{ $event['event'] }}</div>
                        <div class="col-4 mx-auto" align="left">{{ $event['description'] }}</div>
                        <div class="col-2 mx-auto" align="left">{{ $event['money'] }}</div>
                        <div class="col-3 mx-auto" align="left">{{ $event['deadline'] }}</div>
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
