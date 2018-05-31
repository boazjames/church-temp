<div class="sermon dynamic">
<div class="panel bg-white">
    <div class="panel-heading white-color text-bold bg-blue-dark">Sermons</div>
    @include('admin.includes.flash-messages')
    <form method="post" action="filt-sermon">
        {{csrf_field()}}
        <input type="text" class="form-control inline filt-form" name="title" placeholder="Filter Sermons..." required>
       <button type="submit" class="btn btn-primary inline">Filter</button>
    </form>

    @if(count($sermons)>0)
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
            <td><button class="btn btn-warning btn-sm sermon-edit-btn" data-id="{{$sermon->id}}">Edit</button> <button class="btn btn-danger btn-sm sermon-delete-btn" data-id="{{$sermon->id}}">Delete</button> </td>
        </tr>
            @endforeach
    </table>
        @else
    <div class="jumbotron padding-left-30p"><h3>There is no such sermon</h3></div>
        @endif
</div>

    <div class="links text-center">{{$sermons->links()}}</div>

</div>
