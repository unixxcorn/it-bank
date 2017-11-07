<div>
<div class="row" id="statement">
@php
    $event = App\Events::Where('is_expend', 1)->orderBy('deadline', 'desc')->take(3)->get();
@endphp
    @foreach ($event as $value)
        <div onclick="location.href='{{ Request::url().'/../event/'.$value['id'] }}';" style="cursor: pointer;">
            <div class="col-xs-1 col-md-1">{{ $value['id'] }}</div>
            <div class="col-xs-6 col-md-7">{{ $value['event'] }}</div>
            <div class="col-xs-5 col-md-4">{{ $value['money'] }}</div>
        </div>
    @endforeach
</div>
</div>