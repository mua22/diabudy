<div class="form-group @if($errors->has('title')) has-error @endif" >
    <label for="title" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
        <input type="text" name="title" class="form-control" id="title" placeholder="Title"
        @if(isset($category))value="{{$category->title}}" @endif
        >
        @if($errors->has('title'))
            <span class="help-block">
                {{$errors->first('title')}}
            </span>
        @endif

    </div>
</div>

<div class="form-group">
    <label for="parent_id" class="col-sm-2 control-label">Parent</label>
    <div class="col-sm-10">
        <select type="text" name="parent_id" class="form-control" id="parent_id" placeholder="Parent_id">
            <option value=""></option>
            @foreach($categories as $cat)
                <option value="{{$cat->id}}"
                @if(isset($category)) @if($category->parent_id==$cat->id)selected="selected" @endif @endif
                >{{$cat->tree_title}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    <label for="featured_image" class="col-sm-2 control-label">Featured_image</label>
    <div class="col-sm-10">
        <input type="file" name="featured_image" class="form-control" id="featured_image" placeholder="Featured_image">
    </div>
</div>

<div class="form-group">
    <label for="description" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
        <textarea type="text" name="description" class="form-control ckeditor" id="description" placeholder="Description">@if(isset($category)){{$category->description}}@endif</textarea>
    </div>
</div>


