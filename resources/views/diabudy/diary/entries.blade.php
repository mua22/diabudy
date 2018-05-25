<div class="">


@foreach($entries as $entry)
    @include('diabudy.diary._entry',compact('entry'))
    @endforeach
{{$entries->render()}}

</div>