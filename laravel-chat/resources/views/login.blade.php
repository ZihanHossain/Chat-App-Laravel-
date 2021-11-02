<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <center>
        <div>
            <legend>Login</legend>
            <form action="/loginvarify" method="POST">
                @csrf
                <input type="text" name="username" placeholder="Enter your username">
                <input type="password" name="password" placeholder="Enter a password">
                <button type="submit">Log In</button>
            </form>
            <div>
                <span>Or</span>
                <span><a href="/registration"><button>Register</button></a></span>
            </div>
            <div>
                @isset($alert)
                    <h1>{{$alert}}</h1>
                @endisset
            </div>
        </div>
    </center>
</body>
</html>