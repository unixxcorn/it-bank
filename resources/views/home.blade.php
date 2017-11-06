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
@endsection

@section('accountant')
    @component('account.pay')
    @endcomponent
    @component('event.manage')
    @endcomponent
@endsection
@section('admin')

@endsection