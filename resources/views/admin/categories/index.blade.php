@extends('admin.layouts.master')

@section('content')
    <div class="block full">
        <!-- Web Server Title -->
        <div class="block-title">

            <h2><strong>Manage</strong> Categories</h2>
        </div>
        <!-- END Web Server Title -->
        <div class="block-content-mini-padding">
            <div class="row">
                <a href="{{route('categories.create')}}" class="btn btn-info">Add New Category</a>
            </div>
            <table class="table table-vcenter table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>title</th>

                        <th style="width: 150px;" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->tree_title}}</td>

                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a href="{{route('categories.up',$category->id)}}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Move Up"><i class="fa fa-arrow-up"></i></a>
                                <a href="{{route('categories.down',$category->id)}}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Move Down"><i class="fa fa-arrow-down"></i></a>
                                <a href="{{route('categories.edit',$category->id)}}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-id="{{$category->id}}" data-toggle="tooltip" title="Delete" class="btn btn-danger btnDelete" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                <form action="{{route('categories.destroy',$category->id)}}" style="display: none"
                                id="delForm{{$category->id}}" method="post"
                                >
                                    @csrf
                                    {{method_field('DELETE')}}

                                </form>

                            </div>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>

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
        });
    </script>
    @endsection