/* 

1. Add your custom JavaScript code below
2. Place the this code in your template:

  

*/
/* Add your custom JavaScript code */

function notify_success(msg) {
    $.notify({
        title: '<strong>Heads up!</strong>',
        message: msg
    },{
        type: 'success',
        animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
        }
    });
}
function notify_error(msg) {
    $.notify({
        title: '<strong>Heads up!</strong>',
        message: msg
    },{
        type: 'success',
        animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
        }
    });
}


$(document).ready(function () {
    $("#logout-button").click(function (e) {
        $("#logout-form").submit();
        e.stopPropagation();
        e.preventDefault();


    });
});

