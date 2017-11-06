<div>
<div class="row" id="statement">
@php
    $event = App\Events::Where('inout', 1)->orderBy('deadline', 'desc')->take(3)->get();
@endphp
    @foreach ($event as $value)
        <div onclick="location.href='{{ Request::url().'/../event/'.$value['id'] }}';" style="cursor: pointer;">
            <div class="col-xs-6 col-md-8">{{ $value['event'] }}</div>
            <div class="col-xs-6 col-md-4">{{ $value['money'] }}</div>
        </div>
    @endforeach
</div>
</div>