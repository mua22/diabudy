
<div id="blog" class="grid-layout post-1-columns m-b-30 grid-loaded">
    @foreach($posts as $post)
        @include('polo.home..partials._single_post',['post'=>$post])
    @endforeach
    {{$posts->render()}}
</div>