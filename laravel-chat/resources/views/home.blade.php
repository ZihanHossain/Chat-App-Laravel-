<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Who you want to chat with?</h1>
    @foreach($users as $user)
        <ui>
            <a href="/index/{{$user['username']}}"><li>{{$user['username']}}</li></a>
        </ui>
    @endforeach
</body>
</html>