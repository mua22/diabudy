@extends('admin.layouts.master')

@section('content')
    <div class="block full">
        <!-- Web Server Title -->
        <div class="block-title">

            <h2><strong>Create</strong> Category</h2>
        </div>
        <!-- END Web Server Title -->
        <div class="block-content-mini-padding">
            <form action="{{route('categories.store')}}" class="form-horizontal form-bordered" method="post">
                @csrf
                {{method_field('POST')}}
                @include('admin.categories._form')
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        <a href="{{route('categories.index')}}" class="btn btn-sm btn-info"><i class="fa fa-angle-left"></i> Cancel</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
@section('script')
    <script src="/admin/js/helpers/ckeditor/ckeditor.js"></script>
    @endsection