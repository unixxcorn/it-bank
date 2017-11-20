@extends('layouts.app')
@section('bg')
<img src="/bg/bg.jpg" class="bg-img" />
@endsection
@section('content')
    @php
        use App\User;
        use App\Statement;
        $users = User::Where('name', $name)->select()->first();
    @endphp
    <div class="row justify-content-center align-self-center full-height" id="content">
        <div class="row col-lg-5 col-md-8 col-sm-8 col-xs-12 container card ml-auto line-bottom">
            <div class='subtitle col-md-12'>
                Information of " {{$users['name']}} "
            </div>
            <div class="col-md-8" style="float:left;">
                <div class="row justify-content-center align-self-center">
                    <div class="col-3" align="left">id</div><div class="col-7" align="left">{{$users['id']}}</div>
                    <div class="col-3" align="left">email</div><div class="col-7" align="left">{{$users['email']}}</div>
                    <div class="col-3" align="left">Create</div><div class="col-7" align="left">{{$users['created_at']}}</div>
                </div>
            </div>
        </div>
        <div class="row col-lg-5 col-md-8 col-sm-8 col-xs-12 container card ml-auto line-bottom">
            <div class='subtitle col-md-12'>
                Payment for " {{$users['name']}} "
            </div>
            <form class="row justify-content-center align-self-center col-md-12" method="POST" action="/user/pay">
                <div class="col-3">User ID</div>
                <div class="col-7"><input class="col-12 form-control" name="uid" required/></div>
                <div class="col-3">Money</div>
                <div class="col-7"><input class="col-12 form-control" name="money" required/></div>
                {{ csrf_field() }}
                <div class="col-10" style="margin-top:10px;"><input type="submit" value="pay" class="btn btn-primary col-12" /></div>
            </form>
        </div>
    </div>
@endsection
