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
@section('style')
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />
@endsection

@section('script')

    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        $(document).ready(function(){

            var date_format = "YYYY-MM-DD HH:mm:SS";
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