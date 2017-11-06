<div class="row" id="statement">
    @foreach (App\Statement::all() as $statement)
        @php
            if($statement['inout'] == 0){
                $state = 'in';
            }else{
                $state = 'out';
            }
        @endphp
        <div class="col-xs-6 col-md-8">{{ $statement['statement'] }}</div>
        <div class="col-xs-6 col-md-4 {{ $state }}">{{ $statement['money'] }}</div>
    @endforeach
</div>