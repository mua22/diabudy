

<table class="table table-vcenter table-striped">
    <thead>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>Status</th>
        <th>Publish</th>

        <th style="width: 150px;" class="text-center">Actions</th>
    </tr>
    </thead>
    <tbody id="postsBody">
    @foreach($posts as $post)
        @include('admin.posts.data_row',compact('post   '))
    @endforeach
    </tbody>
</table>

{{$posts->render()}}