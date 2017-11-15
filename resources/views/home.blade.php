@extends('layouts.app')

@section('content')
    <div class="row justify-content-center align-self-center full-height light" id="content">
        <div class="col-lg-5 col-md-8 col-sm-8 col-xs-12 container card light ml-auto line-bottom">
            <div class='subtitle'>
                Faculty detail
            </div>
            <div class="row justify-content-center align-self-center">
                <div class="col-3" align="left">Name</div><div class="col-7" align="left">{{ Auth::user()->name }}</div>
                <div class="col-3" align="left">ID Student</div><div class="col-7" align="left">{{ Auth::user()->id }}</div>
            </div>
        </div>
        <div class="col-lg-5 col-md-8 col-sm-8 col-xs-12 container card light mr-auto line-bottom">
            <div class='subtitle'>
                Money History
            </div>
            <div class="row justify-content-center align-self-center">
                <div class="col-4" align="left">Your unpaid debts</div><div class="col-6" align="left">{{ Auth::user()->name }}</div>
                <div class="col-4" align="left">Common Money</div><div class="col-6" align="left">{{ Auth::user()->id }}</div>
            </div>
        </div>
        <div class="col-lg-5 col-md-8 col-sm-8 col-xs-12 container card light mr-auto line-bottom">
            <div class='subtitle'>
                Event
            </div>
            <div class="row justify-content-center align-self-center">
                <div class="col-4" align="left">I'm so LASYYY</div>
            </div>
        </div>
    </div>
@endsection
