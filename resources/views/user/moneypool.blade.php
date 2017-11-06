<div>
<div class="row" id="statement">
    @php
        $income = App\StatementIncome::all()->sum('money');
        $expend = App\StatementExpend::all()->sum('money');
        $users  = App\User::all()->count();
    @endphp
    <div class="col-xs-6 col-md-8">Income</div>
    <div class="col-xs-6 col-md-4">{{ $income }}</div>
    <div class="col-xs-6 col-md-8">Expend</div>
    <div class="col-xs-6 col-md-4">{{ $expend }}</div>
    <div class="col-xs-6 col-md-8">Total</div>
    <div class="col-xs-6 col-md-4">{{ $income - $expend }}</div>
    <div class="col-xs-6 col-md-8">Your Money</div>
    <div class="col-xs-6 col-md-4">{{ ($income - $expend)/$users }}</div>
    
    
    
</div>
</div>