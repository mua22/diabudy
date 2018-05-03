@extends('diabudy.logbook.master')

@section('logbook-content')
    <h2>My Logbook <i class="fa fa-bars fa-lg"></i><span class="pull-right"><a href="logbook/sugar/add" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Sugar level</a></span></h2>

    <table class="table" id="tblAllReadings">
        <thead>
        <tr>
            {{--<th><input type="checkbox" name="chkSelectAll" id="chkSelectAll"></th>--}}
            <th>Reading</th>
            <th>Date</th>
            <th>Type</th>
            <th width="150px">Category</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody id="logbookbody">

        </tbody>
    </table>

@endsection

@section('logbook-style')
    <style>
        .tabs-content{
            overflow: visible;
        }
    </style>
@endsection

@section('logbook-script')
        <script>
        $(document).ready(function(){
            callAjax('{{route('logbook.data')}}');
            $("#tblAllReadings").on('click','.btn-delete',function (e) {
                e.preventDefault();
                id = $(this).attr('data-id');
                $.get('/my/logbook/'+id,function (result) {
                    $.notify(result);
                    $("#reading"+id).fadeOut().remove();
                })
            });
        });
        function deleteReading(e) {
            e.preventDefault();
        }
        function callAjax(url) {
            $.ajax({
                url : url,
                type: "GET",

                success: function (data) {
                    $('#logbookbody').empty();
                    $('#logbookbody').append(data);
                    $('a.page-link').click(function (e) {

                        e.preventDefault();
                        callAjax(this.getAttribute('href'));

                    });
                },
                error: function (jXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
        }
    </script>
@endsection