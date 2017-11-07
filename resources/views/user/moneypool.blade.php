<div>
<div class="row" id="moneypool">
    @php
        $income = App\Statement::where('is_expend', '0')->sum('money');
        $expend = App\Statement::where('is_expend', '1')->sum('money');
        $users  = App\User::all()->count();
        $ur_in  = App\Statement::where('uid', Auth::user()->id)->sum('money')
    @endphp
    <div class="col-xs-6 col-md-8">Income</div>
    <div class="col-xs-6 col-md-4">{{ $income }}</div>
    <div class="col-xs-6 col-md-8">Expend</div>
    <div class="col-xs-6 col-md-4">{{ $expend }}</div>
    <div class="col-xs-6 col-md-8">Total</div>
    <div class="col-xs-6 col-md-4">{{ $income - $expend }}</div>
    <div class="col-xs-6 col-md-8">Your expend</div>
    <div class="col-xs-6 col-md-4">{{ sprintf('%.0f',$expend / $users) }}</div>
    <div class="col-xs-6 col-md-8">Your Money</div>
    <div class="col-xs-6 col-md-4">{{ sprintf('%.0f',$ur_in - ($expend / $users)) }}</div>
    
    
    
</div>
</div>