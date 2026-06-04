<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(session('success'))

    <h3> {{session('success')}} </h3>

    @endif

    <h2>cookies  data   </h2>

    <p> username : {{$name}} </p>
    <p> email : {{$email}} </p>
</body>
</html>