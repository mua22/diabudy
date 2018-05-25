<!DOCTYPE html>
<head>
    <title>Pusher Test</title>
    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('2130841d627a05878216', {
            cluster: 'ap2',
            encrypted: true
        });

        var channel = pusher.subscribe('user-created');
        channel.bind('user-created', function(data) {
            alert(data.message);
        });
    </script>
</head>