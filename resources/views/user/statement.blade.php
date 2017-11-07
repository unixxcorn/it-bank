<div>
<div class="row" id="statement">
@php
    $statements = App\Statement::all();
@endphp
    @foreach ($statements as $statement)
        @php
            if($statement['is_expend'] == 0){
                $state = 'in';
            }else{
                $state = 'out';
            }
        @endphp
        <div class="col-xs-4 col-md-5">{{ $statement->event->event }}</div>
        <div class="col-xs-4 col-md-5">{{ $statement->user->name }}</div>
        <div class="col-xs-4 col-md-2 {{ $state }}">{{ $statement['money'] }}</div>
    @endforeach
</div>
</div>