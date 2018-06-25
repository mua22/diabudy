
<div class="row"><div class="form-group">
    <label for="title" class="upper">Title*</label>

        <input type="text" name="title" class="form-control" id="title" placeholder="Title"
        @if(isset($post)) value="{{$post->title}}" @endif
        >

</div></div>
<div class="row">
    <div class="form-group">
        <label class="upper" for="articleSummary">Summary Text: To Show in list view*</label>
        <textarea class="form-control" rows="10" name="post_summary" placeholder="Article Summary" id="articleSummary" aria-required="true">@if(isset($post)){{$post->summary}} @endif</textarea>
    </div>
</div>
<div class="row">
    <div class="form-group">
        <label class="upper" for="content">Content*</label>
        <textarea class="form-control richtextarea" rows="10" name="post_content" placeholder="Write Content Here" id="articleContent" aria-required="true">@if(isset($post)){{$post->content}} @endif</textarea>
    </div>
</div>
{{--<div class="row">--}}
    {{--<div class="col-sm-6">--}}
        {{--<div class="form-group">--}}
            {{--<label class="upper" for="feature">Featured Image</label>--}}
            {{--<input type="file" class="form-control" id="feature" name="post_image">--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-sm-6">Image will show here</div>--}}

{{--</div>--}}
<div class="row">
    <div class="form-group">
        <label for="tags" class="upper">Tags</label>
        <input name="tags" id="tags" value="" class="form-control"/>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group text-center">
            <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i>Save Draft</button>
            <button class="btn btn-info" type="submit" name="submit_new" value="Submit">Submit</button>
            {{--<a class="btn btn-primary" data-target="#modal-2" data-toggle="modal" href="#"><i class="fa fa-globe"></i>Publish</a>--}}
        </div>
    </div>
</div>



@section('script')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script>
        $(function () {
           $('#tags').tagsInput({
               autocomplete_url:'{{route("tags.ajax")}}',
               'width':'100%',
               'interactive':true,
               'defaultText':'add a tag',
               'placeholderColor' : '#666666'
           });
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });
        $('.richtextarea').ckeditor(options);
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>
@endsection

@section('modals')
    <div class="modal fade" id="modal-2" tabindex="-1" role="modal" aria-labelledby="modal-label-2" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 id="modal-label-2" class="modal-title">Confirm Publish Article</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>Are you sure that you want to publish this article as after
                                publishing you cannot edit. However you would be able to unpublish at any time.
                                Then you would be able to edit it again. </p>
                            <p>If you are admin or publisher your article would be published immediately. Otherwise
                                we would review it and would let you know whan your article is published</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="pull-left">
                        <button data-dismiss="modal" class="btn btn-b" type="button">Cancel</button>

                    </div>
                    <div class="pull-right">
                        <button class="btn btn-info" type="submit" name="submit_new" value="Submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
