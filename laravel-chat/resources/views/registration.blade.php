<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <center>
        <div>
            <legend>Registration</legend>
            <form action="/register" method="POST">
                @csrf
                <input type="text" name="username" placeholder="Enter your username">
                <input type="password" name="password" placeholder="Enter a password">
                <button type="submit">Sign Up</button>
            </form>
            <div>
                <span>Or</span>
                <span><a href="/login"><button>Log In</button></a></span>
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