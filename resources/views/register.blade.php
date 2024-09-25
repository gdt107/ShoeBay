<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Please Register Your Account</h1>
    <form action="login" method="POST">
        @csrf
        <div>
        <label for="">Email Adress: </label>
        <input type="email" name="email">
        </div>
        <div>
        <label for="">username: </label>
        <input type="username" name="username">
        </div>
        <div>
        <label for="">password: </label>
        <input type="password" name="password">
        </div>
        <button>Register</button>
    </form>
    
</body>
</html>