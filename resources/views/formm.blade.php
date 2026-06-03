<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form </title>
</head>
<body>
    <h1>Form</h1>

    <form action = '/formm' method = "POST">
        @csrf
        <input type = "text" name = "name" placeholder = "Enter your name">
        <br><br>

        <input type = "email" name = "email" placeholder = "Enter yor email">

        <br> <br>

        <input type = "password" name = "password" placeholder = "Enter your password">
        <br><br>
        <input type = "confirm_password" name = "confirm_password" placeholder = "Confirm your password">
        <br><br>

        <input type = "text" name = "branch" placeholder = "Enter your branch">
        <br><br>

        <input type = "text" name = "number" placeholder = "Enter your number">
        <br><br>

        <button type = "submit">Submit</button>
    </form>
</body>
</html>