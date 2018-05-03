@extends('admin.layouts.master')

@section('content')
    <div class="block full">
        <!-- Web Server Title -->
        <div class="block-title">

            <h2><strong>Manage</strong> Posts</h2>
        </div>
        <!-- END Web Server Title -->
        <div class="block-content-mini-padding">
            <div class="row">
                <a href="{{route('posts.create')}}" class="btn btn-info">Add New Post</a>
                <select name="" id=""></select>
            </div>
            <div id="postsData"></div>

        </div>

    </div>

@endsection
@section('script')
    <script>
        $(function () {
            $('body').on('click','.btnDelete',function (e) {
                e.preventDefault();
                var id=$(this).attr('data-id');
                $('#delForm'+id).submit();
            });

            $.get('{{route('posts.data')}}',function (result) {
                $('#postsData').html(result);
            });
            $('body').on('click','ul.pagination .page-link',function (e) {
                e.preventDefault();
                var url = $(this).attr('href');

                $.get(url,function (result) {
                    $('#postsData').html(result);
                });
            });
        });
    </script>
    @endsection