<div class="admin dynamic">
    <div class="panel bg-white">
        <div class="panel-heading white-color text-bold bg-blue-dark">Admin</div>
        @include('admin.includes.flash-messages')
        <form method="post" action="filt-admin">
            {{csrf_field()}}
            <input type="text" class="form-control inline filt-form" name="username" placeholder="Filter Admin...">
            <button type="submit" class="btn btn-primary inline">Filter</button>
        </form>

        @if(count($admins)>0)
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

                @if(Auth::user()->level==1 && $admin->level==2)
                <td><button class="btn btn-danger btn-sm admin-delete-btn" data-id="{{$admin->id}}" data-level="{{$admin->level}}" auth-level="{{Auth::user()->level}}">Delete</button> </td>
            @else
                    <td><button class="btn btn-danger btn-sm admin-delete-btn" data-id="{{$admin->id}}" data-level="{{$admin->level}}" auth-level="{{Auth::user()->level}}" disabled>Delete</button> </td>
                @endif

            </tr>
            @endforeach

        </table>

            @else
            <div class="jumbotron padding-left-30p"><h3>There is no such admin</h3></div>
        @endif
    </div>

    <div class="links text-center">{{$admins->links()}}</div>

</div>
