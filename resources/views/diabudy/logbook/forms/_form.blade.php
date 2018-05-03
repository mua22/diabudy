<div class="row">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{--<div class="col-md-8 col-md-offset-2 center">--}}
    <div class="center">

            @csrf
            <div class="form-group">
                <label for="readingInput" class="text-left">Reading</label>
                <input type="text" class="form-control" id="readingInput" placeholder="0" name="reading"
                    @if(isset($reading)) value = {{$reading->reading}} @endif
                >
            </div>
            <div class="form-group">
                <label for="inputDate" class="text-left">Date</label>
                <input type="text" class="form-control datetimeinput" id="inputDate" placeholder="" name="record_time"
                       @if(isset($reading)) value = {{$reading->record_time}} @endif
                >
            </div>
            <div class="form-group">
                <label for="inputCategory" class="text-left">Category</label>
                <select name="sugar_category_id" id="inputCategory" class="form-control">
                    @foreach($categories as $categry)
                        <option value="{{$categry->id}}"
                                @if(isset($reading)) @if($reading->sugar_category_id==$categry->id)selected="selected" @endif @endif
                        >{{$categry->title}}</option>
                    @endforeach
                </select>
                <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">

            </div>
            <div class="form-group">
                <button class="m-t-35 btn btn-primary" type="submit">Submit</button>
            </div>

    </div>
</div>
@section('logbook-style')
    <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />

@endsection

@section('logbook-script')
    <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
    {{--<script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>--}}
    <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        $(document).ready(function(){

            var date_format = "YYYY-MM-DD";
            @if(!isset($reading))
            var current_time = new moment ().format(date_format);
            $('.datetimeinput').val(current_time);
            @endif

            $('.datetimeinput').datetimepicker({
                sideBySide:true,
                format:date_format,
                showTodayButton:true,
                widgetPositioning:{
                    horizontal: 'auto',
                    vertical: 'bottom',
                }
            });
        });
    </script>
@endsection