<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Chat</title>

    <link rel="stylesheet" href="./css/app.css" />
</head>
<body>
    <div class='app'>
        <header>
            <span>Welcome: <strong id="username">{{session()->get('username')}}</strong></span>
            <sapn><a href="/logout"><button>Log Out</button></a></sapn>
            <h1>Connected with: <strong id="send_to">{{session()->get('send_to')}}</strong></h1>
            <!-- <input type="text" name="username" id="username" placeholder="PLease enter your username..." /> -->
            <!-- <input type="text" name="send_to" id="send_to" placeholder="PLease enter recever's username..." /> -->
        </header>

        <div id="messages"></div>

        <form action="/index" id="message_form">
            <input type="text" name="message" id="message_input" placeholder="Write a message..." />
            <button type="submit" id="message_send">Send Message</button>
        </form>
    </div>

    <script src="./js/app.js"></script>
</body>
</html>