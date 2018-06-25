
<div class="post-item border timeline-{{$entry->id}}" style="padding: 0px 20px 20px 0px; left: 0px; top: 0px;">

    <div class="post-item-wrap">

    </div>
    <div class="post-item-description">
        <span class="pull-right">
              <div class="dropdown">
                  <button class="btn btn-info btn-xs dropdown-toggle" type="button" id="dropdownMenu{{$entry->id}}" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                    Actions
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu{{$entry->id}}">
                    <li><a href="#" class="edit" data-id="{{$entry->id}}"><i class="fa fa-pencil"></i> Edit Entry</a></li>
                    <li><a href="#" class="delete" title="Delete" data-id="{{$entry->id}}"><i class="fa fa-trash"></i>Delete Entry</a></li>

                  </ul>
              </div>
        </span>
        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{$entry->created_at->format('M D, Y')}}</span>
        <p id="entry-content-{{$entry->id}}">{{$entry->entry}}</p>

    </div>


</div>
