<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('c487e2260eeac3c77721', {
      cluster: 'eu',
      forseTLS:true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
    //   alert(JSON.stringify(data));
        mark(data)
    });

    function mark(data) {
        console.log(data[0]['short_description'])
        let div = document.createElement('div')
        div.innerHTML = data[0].title
        document.body.append(div)
    }
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>
</body>
