@extends('admin.layouts.master')

@section('content')
    <div class="block full">
        <!-- Web Server Title -->
        <div class="block-title">

            <h2><strong>Manage</strong> Users</h2>
        </div>
        <!-- END Web Server Title -->
        <div class="block-content-mini-padding">
            <table class="table table-vcenter table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th style="width: 150px;" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
            {{$users->render()}}
        </div>

    </div>
@endsection