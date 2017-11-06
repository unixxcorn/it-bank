@extends('layouts.user')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h3>{{ $dataset['event'] }}</h3></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-9 col-md-8">
                    <p style="text-indent:20px;text-align:justify;">{{ $dataset['description'] }}</p>
                </div>
                <div class="col-xs-3 col-md-4" style="text-align:right;font-size:+2em;">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3>Expend</h3></div>
                        <div class="panel-body">
                            <h1 style="text-align:right;font-size:+3.5em;">{{ $dataset['money'] }}</h1>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Deadline</div>
                        <div class="panel-body">
                            <h4>{{ $dataset['deadline'] }}</h4>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
