<script>
    $(function () {
        var date_format = "YYYY-MM-DD hh:mm";
        var current_time = new moment ().format(date_format);
        $('.datetimeinput').val(current_time);
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
    $(document).ready(function () {
        $('#add-sugar-form').on('submit',function (e) {
            //alert('hello');
            e.preventDefault();
            $.ajax({
                url : $(this).attr('action') || window.location.pathname,
                type: "POST",
                data: $(this).serialize(),
                success: function (data) {
                    notify_success('Form Submitted!');
                },
                error: function (jXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
        });
    });
</script>