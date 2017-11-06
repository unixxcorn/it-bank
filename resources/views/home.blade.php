@extends('layouts.user')

@section('user')
    
@endsection

@section('accountant')
    @component('account.pay')
    @endcomponent
    @component('event.manage')
    @endcomponent
@endsection
@section('admin')

@endsection