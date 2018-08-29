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
                <select name="category_id" id="selectCategory" class="filter">
                    <option value="all" selected="selected">All Categories</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->tree_title}}</option>
                        @endforeach
                </select>
                <select name="status" id="selectStatus" class="filter">
                    <option value="all">All Status</option>
                    <option value="submitted">Submitted</option>
                    <option value="published">Published</option>
                </select>
                <input type="text" id="search" placeholder="Search Here" class="filter">
            </div>
            <div id="postsData"></div>

        </div>

    </div>

@endsection
@section('script')
    <script>
        function getData() {
            //alert('getting Data');
            var cat= $('#selectCategory').val();
            var status= $('#selectStatus').val();
            var url = '{{route('posts.data')}}?status='+status+'&category='+cat;
            if($('#search').val()){

                url+= '&search='+$('#search').val();
                //alert(url);
            }

            $.get(url,function (result) {
                $('#postsData').html(result);
        });
        }
        $(function () {
            //alert('callig data');
            $('body').on('click','.btnDelete',function (e) {
                e.preventDefault();
                var id=$(this).attr('data-id');
                //$('#delForm'+id).submit();
                var form = $('#delForm'+id);
                $.post(form.attr('action'),form.serialize(),function (e) {
                    $('#tr-'+id).remove();
                })
            });

            getData();

            $('.filter').on('change',function (e) {
                    getData();
                });
            $('#search').on('input',function (e) {
                if($(this).val().length>2)
                    getData();
            });
            $('body').on('click','ul.pagination .page-link',function (e) {
                e.preventDefault();
                var url = $(this).attr('href');

                $.get(url,function (result) {
                    $('#postsData').html(result);
                });
            });
            $('body').on('click','a.approve',function (e) {
               e.preventDefault();
               var id= $(this).attr('data-id');
               $.post('{{route('posts.approve')}}',{id:id},function (data) {

                   $('#tr-'+id).replaceWith($(data));

               })
            });
            $('body').on('click','a.unpublish',function (e) {
               e.preventDefault();
               var id= $(this).attr('data-id');
               $.post('{{route('posts.unpublish')}}',{id:id},function (data) {

                   $('#tr-'+id).replaceWith($(data));

               })
            });
        });
    </script>
    @endsection