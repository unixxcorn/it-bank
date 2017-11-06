<div>
<div class="row" id="statement">
@php
    $income = App\StatementIncome::all();
    $expend = App\StatementExpend::all();
@endphp
    @foreach ($income as $statement)
        @php
            if($statement['inout'] == 0){
                $state = 'in';
            }else{
                $state = 'out';
            }
        @endphp
        <div class="col-xs-6 col-md-8">{{ $statement->event->event }}</div>
        <div class="col-xs-6 col-md-4 {{ $state }}">{{ $statement['money'] }}</div>
    @endforeach
    @foreach ($expend as $statement)
        @php
            if($statement['inout'] == 0){
                $state = 'in';
            }else{
                $state = 'out';
            }
        @endphp
        <div class="col-xs-6 col-md-8">{{ $statement->event->event }}</div>
        <div class="col-xs-6 col-md-4 {{ $state }}">{{ $statement['money'] }}</div>
    @endforeach
</div>
</div>