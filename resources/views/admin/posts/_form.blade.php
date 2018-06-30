<div class="form-group @if($errors->has('title')) has-error @endif" >
    <label for="title" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
        <input type="text" name="title" class="form-control" id="title" placeholder="Title"
        @if(isset($post))value="{{$post->title}}" @endif
        >
        @if($errors->has('title'))
            <span class="help-block">
                {{ $errors->first('title') }}
            </span>
        @endif

    </div>
</div>

<div class="form-group">
    <label for="category_id" class="col-sm-2 control-label">Category</label>
    <div class="col-sm-10">
        <select type="text" name="category_id" class="form-control" id="category_id" placeholder="Parent_id">
            <option value=""></option>
            @foreach($categories as $cat)
                <option value="{{$cat->id}}"
                @if(isset($post)) @if($post->category_id==$cat->id)selected="selected" @endif @endif
                >{{$cat->tree_title}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    <label for="description" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
        <textarea type="text" name="description" class="form-control ckeditor" id="description" placeholder="Description">@if(isset($post)){{$post->description}}@endif</textarea>
    </div>
</div>
<div class="form-group">
    <label for="meta_keywords" class="col-sm-2 control-label">Meta Keywords</label>
    <div class="col-sm-10">
        <textarea type="text" name="meta_keywords" class="form-control ckeditor" id="meta_keywords" placeholder="Meta Keywords">@if(isset($post)){{$post->meta_keywords}}@endif</textarea>
    </div>
</div><div class="form-group">
    <label for="meta_description" class="col-sm-2 control-label">Meta Description</label>
    <div class="col-sm-10">
        <textarea type="text" name="meta_description" class="form-control ckeditor" id="meta_description" placeholder="Meta Description">@if(isset($post)){{$post->meta_description}}@endif</textarea>
    </div>
    <input type="hidden" value="{{ Auth::id() }}" name="author_id">
</div>
