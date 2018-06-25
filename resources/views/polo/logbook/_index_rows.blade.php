@foreach($readings as $reading)
    
    <tr id="reading{{$reading->id}}">
        {{--<td><input type="checkbox" name="check[{{$reading->id}}]" id="chk{{$reading->id}}"></td>--}}
        <td >{{$reading->reading}}</td>
        <td>{{$reading->record_time->format('Y-m-d')}}</td>

        <td>{{$reading->type}}</td>
        <td>{{$reading->category->title}}</td>
        <td nowrap><a href="{{route('logbook.edit',$reading->id)}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>Edit</a>
            <a href="#" data-id="{{$reading->id}}" class="btn btn-danger btn-xs btn-delete"><i class="fa fa-trash"></i>Delete</a>
        </td>
    </tr>
@endforeach
<tr>
    <td rowspan="5">
        {{$readings->render()}}
    </td>
</tr>