<div class="admin dynamic">
    <div class="panel bg-white">
        <div class="panel-heading white-color text-bold bg-blue-dark">Admin</div>
        <form>
            <input type="text" id="filt-admin" class="form-control" placeholder="Filter Admin...">
        </form>
        <table id="admin-tbl" class="table-striped table-responsive">
            <tr>
                <th>Admin ID</th>
                <th>Salutation</th>
                <th>Username</th>
                <th>Level</th>
                <th>Last Login</th>
                <th></th>
            </tr>

            @foreach($admins as $admin)
            <tr>
                <td class="text-center">{{$admin->id}}</td>
                <td>{{$admin->salutation}}</td>
                <td>{{$admin->username}}</td>
                <td>{{$admin->level}}</td>
                <td>{{($admin->created_at)->toDayDateTimeString()}}</td>
                <td><button class="btn btn-warning btn-sm" data-id="{{$admin->id}}">Edit</button> <button class="btn btn-danger btn-sm" data-id="{{$admin->id}}">Delete</button> </td>
            </tr>
            @endforeach

        </table>
    </div>

    <div class="links text-center">{{$admins->links()}}</div>

</div>
