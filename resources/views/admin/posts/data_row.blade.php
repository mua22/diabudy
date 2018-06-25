<tr id="tr-{{$post->id}}">
    <td>{{$post->id}}</td>
    <td><a target="_blank" href="{{route('frontend.post',$post->slug)}}">{{$post->title}}</a></td>
    <td>{{$post->status}}</td>
    <td>
        @if(!$post->published)
            <a href="#" class="btn btn-xs btn-success approve" data-id="{{$post->id}}">Publish</a>
            @else
            <a href="#" class="btn btn-xs btn-danger unpublish" data-id="{{$post->id}}">UnPublish</a>

        @endif
    </td>
    <td class="text-center">
        <div class="btn-group btn-group-xs">
            <a href="{{route('posts.edit',$post->id)}}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
            <a href="javascript:void(0)" data-id="{{$post->id}}" data-toggle="tooltip" title="Delete" class="btn btn-danger btnDelete" data-original-title="Delete"><i class="fa fa-times"></i></a>
            <form action="{{route('posts.destroy',$post->id)}}" style="display: none"
                  id="delForm{{$post->id}}" method="post"
            >
                @csrf
                {{method_field('DELETE')}}

            </form>

        </div>
    </td>
</tr>