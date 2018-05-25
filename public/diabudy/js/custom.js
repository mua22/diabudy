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