<div class="">


@foreach($entries as $entry)
    @include('polo.diary._entry',compact('entry'))
    @endforeach
{{$entries->render()}}

</div>