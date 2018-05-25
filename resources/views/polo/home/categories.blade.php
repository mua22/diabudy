<div class="accordion radius border">
    <h3>Diabetes Article Categories</h3>
    <p>Categorised Articles about diabetes</p>

    @foreach($categories as $key=>$category)
        <div class="ac-item @if($key==0)ac-active @endif">
            <h5 class="ac-title"><i class="fa fa-heart"></i> {{$category->title}}</h5>
            <div class="ac-content" style="display: @if($key==0) block @else none @endif ;">
                {!! $category->description !!}
            </div>
        </div>

    @endforeach
</div>