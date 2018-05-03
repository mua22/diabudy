@extends('diabudy.logbook.master')

@section('logbook-content')
    <h2>My Performance <i class="fa fa-bars fa-lg"></i></h2>
    <div class="row">
        <ul class="pagination" id="chartPagination">

        </ul>
    </div>
    <div id="chartCanvas">

    </div>
    {{--<canvas id="myChart" width="400" height="400"></canvas>--}}
@endsection

@section('logbook-style')

@endsection

@section('logbook-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script>
        $(document).ready(function () {
        callAjax('{{route('logbook.charts.data')}}');
        });
        function callAjax(url) {
            $.ajax({
                url : url,
                type: "GET",

                success: function (data) {
                    setChart(data);
                    setPagination(data);
                },
                error: function (jXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
        }
        function setChart(data) {
            $('#chartCanvas').empty();
            $('#chartCanvas').append('<canvas id="myChart" width="400" height="150"></canvas>');
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                //type: 'line',
                data: {
                    labels: data.labels,
                    datasets: data.datasets,

                },
                options: {
                    responsive: true,
                    scales: {
                        yAxes: [{
                            ticks: {
                                //beginAtZero:true,
                                suggestedMin: 70,
                            }
                        }]
                    }
                }
            });
        }
        function setPagination(data) {
            var pagination = $('#chartPagination');
            pagination.empty();
            var current_page = data.readings.current_page;
            var first_page_url = data.readings.first_page_url;
            var from = data.readings.from;
            var last_page = data.readings.last_page;
            var last_page_url = data.readings.last_page_url;
            var next_page_url = data.readings.next_page_url;
            var path = data.readings.path;
            var per_page = data.readings.per_page;
            var prev_page_url = data.readings.prev_page_url;
            var to = data.readings.to;
            var total = data.readings.total;
            if(current_page==1){
                pagination.append('<li class="page-item disabled"><span class="page-link">«</span></li>');
                pagination.append('<li class="page-item active"><span class="page-link">1</span></li>');
            }else{
                pagination.append('<li class="page-item"><a class="page-link" href="'+prev_page_url+'" rel="prev">«</a></li>');
                pagination.append('<li class="page-item"><a class="page-link" href="'+first_page_url+'">1</a></li>');
            }
            if(last_page>2){
                for(var i=2;i<last_page;i++){
                    if(i==current_page)
                        pagination.append('<li class="page-item active"><span class="page-link">'+i+'</span></li>');
                    else pagination.append('<li class="page-item"><a class="page-link" href="'+path+'?page='+i+'">'+i+'</a></li>');
                }
            }

            if(current_page==last_page){
                if(last_page!=1)
                pagination.append('<li class="page-item active"><span class="page-link">'+last_page+'</span></li>');
                pagination.append('<li class="page-item disabled"><span class="page-link">»</span></li>');

            }else{
                pagination.append('<li class="page-item"><a class="page-link" href="'+last_page_url+'">'+last_page+'</a></li>');
                pagination.append('<li class="page-item"><a class="page-link" href="'+next_page_url+'" rel="prev">»</a></li>');
            }

            $('a.page-link').click(function (e) {
                //alert('clicked');
                e.preventDefault();
                callAjax(this.getAttribute('href'));

            });
        }
    </script>
@endsection