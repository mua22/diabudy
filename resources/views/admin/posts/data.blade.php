

<table class="table table-vcenter table-striped">
    <thead>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>Published</th>

        <th style="width: 150px;" class="text-center">Actions</th>
    </tr>
    </thead>
    <tbody id="postsBody">
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td><input type="checkbox" class="chkPublished" @if($post->published)checked="checked"@endif  data-id="{{$post->id}}"></td>
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
    @endforeach
    </tbody>
</table>

{{$posts->render()}}