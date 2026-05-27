<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/submit-form">
    @csrf
    Name: <input type="text" name="name"> <br> <br>
    Email: <input type="email" name="email"> <br> <br>
    Password: <input type="password" name="password"> <br> <br>
    Confirm Password: <input type="password" name="confirm_password"> <br> <br>
    Age: <input type="number" name="age"> <br> <br>
    <input type="submit" value="Register">
</form>
</body>
</html>

