@extends('layouts.app')
@section('bg')
<img src="/bg/bg.jpg" class="bg-img" />
@endsection
@section('content')
    @php
	use App\Events;
        use App\User;
        use App\Statement;
        $user = json_decode(json_encode(DB::table("users")
                    ->select("users.*",
                        DB::raw("(SELECT SUM(itb_statement.money) FROM itb_statement
                                WHERE itb_statement.uid = users.id AND itb_statement.is_expend = 0
                                GROUP BY users.id) as paid"))->get()), True);
    @endphp
    <div class="row justify-content-center align-self-center full-height" id="content">
        <div class="row col-lg-8 col-md-8 col-sm-8 col-xs-12 container card ml-auto line-bottom">
            <div class='subtitle col-md-12'>
                Member List
            </div>
            <form method="POST" class="row justify-content-center align-self-center col-md-12">
                <table class="col-12">
                    <tr >
                        <td align="left">ID</td>
                        <td align="left">Name</td>
                        <td align="left">Email</td>
                        <td align="right">Balance</td>
                        <td align="right">&nbsp</td>
                    </tr>
                    @foreach($user as $value)
                        <tr>
                            <td align="left">{{ $value['id'] }}</td>
                            <td align="left">{{ $value['name'] }}</td>
                            <td align="left">{{ $value['email'] }}</td>
                            <td align="right">
                                @php
                                    $debts = Events::Where('is_expend', 0)->sum('Money');
				    $member = User::count();
				    $paid = $value['paid'];
				    $balance = round($paid - ($debts / $member),0,PHP_ROUND_HALF_UP);
				    if ($balance > 0) {
					echo '+'.$balance;
				    }
				    else {
					echo $balance;
				    }
                                @endphp
                            </td>
                            <td align="right"><a class="btn btn-primary" href="/user/{{ $value['name'] }}">see more</a></td>
                        </tr>
                    @endforeach
                </table>
            </form>
        </div>
    </div>
@endsection
