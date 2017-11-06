<div id="Event Manage" class="panel panel-default">
    <div class="panel-heading">Event Manage</div>
        <div class="panel-body">
            <p>Add, Edit, Remove event</p>
        </div>

        <!-- Table -->
        <table class="table">
            <tr>
                <th>#</th>
                <th>Events</th>
                <th>Description</th>
                <th>Money</th>
                <th>Deadline</th>
                <th>Create</th>
                <th>edit</th>
            </tr>
        @foreach (App\Events::all() as $events)
            <tr>
                <td>{{ $events['id'] }}</td>
                <td>{{ $events['event'] }}</td>
                <td>{{ $events['description'] }}</td>
                <td>{{ $events['money'] }}</td>
                <td>{{ $events['deadline'] }}</td>
                <td>{{ $events['created_at'] }}</td>
                <td>
                    <button type="submit" class="btn btn-default" aria-label="Submit">
                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                    </button>
                </td>
            </tr>
        @endforeach
            <form class="navbar-form navbar-left" role="search">
            
                <tr> 
                    <th>#</th>
                    <th><input type="text" class="form-control" placeholder="Events"></th>
                    <th><input type="text" class="form-control" placeholder="Description"></th>
                    <th><input type="number" class="form-control" placeholder="100"></th>
                    <th colspan="2"><input type="date" class="form-control" placeholder="Search"></th>
                    <td>
                        <button type="submit" class="btn btn-default" aria-label="Submit">
                            <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </button>
                    </td>
                </tr>
                {{ csrf_field() }}
            </form>
        </table>   
</div>