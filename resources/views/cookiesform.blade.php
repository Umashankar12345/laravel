<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = '/setcookie' method = "POST">
        @csrf
        name:
        <input type = "text" name = "rname">

        email:
        <input type = "email" name = "email">

        <button type = "submit"> set cookie </button>
         </form>
</body>
</html>