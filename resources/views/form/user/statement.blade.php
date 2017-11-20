@extends('layouts.app')
@section('bg')
<img src="/bg/bg.jpg" class="bg-img" />
@endsection
@section('content')
    @php
        use App\Statement;
        use App\Events;
        $statement = Statement::Where('is_expend', '!=', '3')->join('users', 'users.id', '=', 'itb_statement.uid')->select('users.name', 'itb_statement.money', 'itb_statement.created_at', 'itb_statement.is_expend');
        $events = Events::Where('is_expend', '1')->select(['event AS name','money','created_at', 'is_expend'])->union($statement)->get();
    @endphp
    <div class="row justify-content-center align-self-center full-height" id="content">
        <div class="row col-lg-8 col-md-8 col-sm-8 col-xs-12 container card ml-auto line-bottom">
            <div class='subtitle col-md-12'>
                Statement
            </div>
            <form method="POST" class="row justify-content-center align-self-center col-md-12">
                <table class="col-12" id="myTable">
                    <tr>
                        <td>Date</td>
                        <td>Name</td>
                        <td>State</td>
                        <td>Amount</td>
                    </tr>
                    @for($i = count($events)-1; $i >= 0; $i--)
                        @if ($events[$i]['is_expend'] == 0)
                            @php
                                $state = 'Income';
                            @endphp
                        @else
                            @php
                                $state = 'Expend';
                            @endphp
                        @endif
                            <tr>
                                <td>{{$events[$i]['created_at']}}</td>
                                <td>{{$events[$i]['name']}}</td>
                                <td>{{$state}}</td>
                                <td>{{$events[$i]['money']}}</td>
                            </tr>
                     @endfor
                </table>
            </form>
        </div>
    </div>
@endsection