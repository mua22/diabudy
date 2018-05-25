
<div class="post-item timeline-{{$entry->id}}">

    <div class="post-content-details">
        <span class="pull-right">
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                    <div class="btn-group" role="group">
                        <a id="btnGroupDrop1" type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-caret-down"></i> Actions
                        </a>
                        <div class="dropdown-menu list-group" aria-labelledby="btnGroupDrop1">
                            <a class="edit dropdown-item list-group-item" href="#" title="Edit" data-target="#modal-{{$entry->id}}" data-toggle="modal"><i class="fa fa-pencil"></i>Edit</a>

                            <a class="delete dropdown-item list-group-item" href="#" title="Delete" data-id="{{$entry->id}}"><i class="fa fa-trash"></i>Delete</a>


                        </div>
                    </div>
                </div>
        </span>
        <div class="post-description">
            <p id="entry-content-{{$entry->id}}">{{$entry->entry}}</p>
            <div class="modal fade" id="modal-{{$entry->id}}" tabindex="-1" role="modal" aria-labelledby="modal-label" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="modal-label">Edit Entry</h4>
                        </div>
                        <form action="{{route("diary.update",$entry->id)}}" method="POST" class="edit-form" data-id="{{$entry->id}}">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12">

                                        @csrf
                                        {{method_field('PUT')}}
                                        <textarea name="entry" class="form-control" id="entry-textarea-{{$entry->id}}" rows="3" style="width: 100%">{{$entry->entry}}</textarea>

                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Close</button>
                            <button class="btn btn-info btn-sm" type="submit">Save Changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="post-read-more">

                {{--<a class="read-more edit" href="#" title="Edit" data-target="#modal-{{$entry->id}}" data-toggle="modal"><i class="fa fa-pencil"></i></a>--}}
                {{--<a class="read-more delete" href="#" title="Delete" data-id="{{$entry->id}}"><i class="fa fa-trash"></i></a>--}}
            </div>
        </div>
    </div>

    <div class="post-meta">
        <div class="post-date">
            <span class="post-date-day">{{$entry->created_at->format('d')}}</span>
            <span class="post-date-month">{{$entry->created_at->format('M')}}</span>
            <span class="post-date-year">{{$entry->created_at->format('Y')}}</span>
        </div>
    </div>
</div>
