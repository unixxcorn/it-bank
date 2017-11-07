@extends('layouts.user')

@section('user')
<div class="panel panel-default">
    <div class="panel-heading">Statement</div>
    <div class="panel-body">
        @component('user.statement')
        @endcomponent
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Money Pool</div>
    <div class="panel-body">
        @component('user.moneypool')
        @endcomponent
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Event</div>
    <div class="panel-body">
        @component('user.event')
        @endcomponent
    </div>
</div>
@endsection

@section('accountant')
    @component('accountant.pay')
    @endcomponent
    @component('accountant.event')
    @endcomponent
@endsection
@section('admin')

@endsection