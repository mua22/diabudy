@extends('polo.layouts.sidebar')

@section('content')
    <h2>My Diary <i class="fa fa-book fa-lg"></i></h2>
    <div class="row">
        <form action="{{route('diary.store')}}" method="post" id="diary-form">
            @csrf
            {{method_field('POST')}}
            <div class="form-group">
                <textarea name="entry" id="entry" rows="3" placeholder="What are you feeling today" style="width: 100%;" class="form-control" required></textarea>
            </div>
            <span class="pull-right"><button type="submit" class="btn btn-info btn-sm">Submit</button></span>
        </form>


    </div>

    <div class="hr-title hr-long center"><abbr>Previous Diary Entries</abbr>
    </div>
        <div class="grid-layout post-1-columns m-b-30 grid-loaded" id="timeline" data-item="post-item"
             style="margin: 0px -20px -20px 0px; position: relative; height: 8076.12px;"
        >
        </div>



@endsection

@section('modals')
    <div class="modal fade" id="modalDiaryEdit" tabindex="-1" role="modal" aria-labelledby="modal-label" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="modal-label">Edit Entry</h4>
                </div>
                <form  method="POST" class="edit-form" data-id="0" id="edit-form">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">

                                @csrf
                                {{method_field('PUT')}}
                                <textarea name="entry" class="form-control" id="entry-textarea" rows="3" style="width: 100%"></textarea>

                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Close</button>
                        <button class="btn btn-info btn-sm edit-btn" type="">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(function () {
            $('#timeline').on('click','.edit',function (e) {
                e.preventDefault();
                var id= $(this).attr('data-id');

                var entryText = $('#entry-content-'+id).text();
                //alert(entryText);
                $('#entry-textarea').val(entryText);
                $('#edit-form').attr('data-id',id);
                $('#modalDiaryEdit').modal('show');
            });
            $('#diary-form').on('submit',function (e) {

                e.preventDefault();
                $.post($(this).attr('action'),$(this).serialize(),function (res) {
                    $('#timeline').prepend(res).hide().show('slow');
                    notify_success('Entry Added');
                    $("#entry").val('');

                })
            });

            $('#timeline').on('click','.delete',function (e) {
                e.preventDefault();
                var id = $(this).attr('data-id');
                $.post("{{route('diary.index')}}/"+id,{_method:'DELETE'},function (e) {
                    $('.timeline-'+id).fadeOut();

                    notify_error('Diary Entry Deleted');
                });
            });
            $('#edit-form').submit(function (e) {
                e.preventDefault();
                //alert('submitting edit form');

                e.preventDefault();
                var id = $(this).attr('data-id');
                $.post("{{route('diary.index')}}/"+id,{_method:'PUT',entry:$('#entry-textarea').val()},function (data) {
                    notify_success('Entry Updated');
                    //$('#modal-'+id).modal('toggle');
                    $('#modalDiaryEdit').modal('hide');
                    $('#entry-content-'+id).html(data.entry);


                });
            });

            $.get('{{route('diary.data')}}',function (res) {
                $('#timeline').html(res);
            })
        });
    </script>
@endsection