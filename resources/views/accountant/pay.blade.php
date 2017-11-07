<div id="pay" class="panel panel-default">
    <div class="panel-heading">User Pay</div>
        <div class="panel-body">
        <p>User Payment</p>
        <div class="row">
            <form class="" role="">
            <div class="col-md-10 col-md-offset-1">                   
                <div class ><input type="text" class="form-control" placeholder="user id or username" required></div>
                <div class ><input type="text" class="form-control" placeholder="event id or event name" required></div>
                <div class ><input type="text" class="form-control" placeholder="Note"></div>
                <div class ><input type="number" class="form-control" placeholder="100" required></div>
                <div class >
                    <button type="submit" class="btn btn-default col-md-12" aria-label="Submit">
                        <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                    </button>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
</div>