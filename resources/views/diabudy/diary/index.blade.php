@extends('diabudy.logbook.master')

@section('logbook-content')
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


        <div class="post-content post-modern" id="timeline">
        </div>



@endsection

@section('logbook-style')

@endsection

@section('logbook-script')
    <script>
        $(function () {
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
            $('#timeline').on('submit','.edit-form',function (e) {
                e.preventDefault();

                var id = $(this).attr('data-id');
                $.post("{{route('diary.index')}}/"+id,{_method:'PUT',entry:$('#entry-textarea-'+id).val()},function (data) {
                    notify_success('Entry Updated');
                    $('#modal-'+id).modal('toggle');
                    $('#entry-content-'+id).html(data.entry);


                });
            });
            $.get('{{route('diary.data')}}',function (res) {
                $('#timeline').html(res);
            })
        });
    </script>
@endsection