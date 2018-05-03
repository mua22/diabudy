<div class="post-content post-modern">
    @foreach($posts as $post)
        @include('diabudy.home._post',compact('post'))
    @endforeach
    {{$posts->render()}}
</div>