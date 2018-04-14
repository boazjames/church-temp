<div class="sermon dynamic">
<div class="panel bg-white">
    <div class="panel-heading white-color text-bold bg-blue-dark">Sermons</div>
    <form>
        <input type="text" id="filt-sermon" class="form-control" placeholder="Filter Sermons...">
    </form>
    <table id="sermon-tbl" class="table-striped table-responsive">
        <tr>
            <th>Sermon ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Created</th>
            <th></th>
        </tr>
        @foreach($sermons as $sermon)
        <tr>
            <td class="text-center">{{$sermon->id}}</td>
            <td>{{$sermon->title}}</td>
            <td>{{$sermon->user->salutation}} {{$sermon->user->username}}</td>
            <td>{{($sermon->created_at)->toFormattedDateString()}}</td>
            <td><button class="btn btn-warning btn-sm" data-id="{{$sermon->id}}">Edit</button> <button class="btn btn-danger btn-sm" data-id="{{$sermon->id}}">Delete</button> </td>
        </tr>
            @endforeach
    </table>
</div>

    <div class="links text-center">{{$sermons->links()}}</div>

</div>
