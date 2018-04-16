<div class="video dynamic">
    <div class="panel bg-white">
        <div class="panel-heading white-color text-bold bg-blue-dark">Videos</div>

        <table id="video-tbl" class="table-striped table-responsive">
            <tr>
                <th>Video ID</th>
                <th>Title</th>
                <th>Code</th>
                <th>Created</th>
                <th></th>
            </tr>
            @foreach($videos as $video)
            <tr>
                <td class="text-center">{{$video->id}}</td>
                <td>{{$video->title}}</td>
                <td>{{$video->code}}</td>
                <td>{{($video->created_at)->toFormattedDateString()}}</td>
                <td><button class="btn btn-warning btn-sm video-edit-btn" data-id="{{$video->id}}">Edit</button> <button class="btn btn-danger btn-sm video-delete-btn" data-id="{{$video->id}}">Delete</button> </td>
            </tr>
            @endforeach

        </table>
    </div>

    <div class="links text-center">{{$videos->links()}}</div>

</div>
