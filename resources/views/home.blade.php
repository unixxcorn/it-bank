@extends('layouts.user')

@section('user')
    <div class="panel-heading">Statement</div>
    <div class="panel-body">
        @component('user.statement')
        @endcomponent
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