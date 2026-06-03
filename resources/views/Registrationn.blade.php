<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<body>
    <h1>user registration</h1>
    <form action="/Registrationn" method = "POST">

    @csrf


    <input type = "text" name = "name" placeholder = "Enter your Name">
<br><br>
    <input type = "email" name = "email" placeholder  = "Enter  your email">
<br><br>   
    <input type = "password" name = "password"  placeholder = "enter your password">
<br><br>
    <button type = "submit">Register</button>
</form>
</body>
</html>