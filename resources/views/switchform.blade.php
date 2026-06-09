<!DOCTYPE html>
<html>
<head>
    <title>Switch Form</title>
</head>
<body>

<h2>Enter Number</h2>

<form action="/switch" method="POST">

    @csrf

    <input type="number"
           name="number">

    <button type="submit">
        Submit
    </button>

</form>

</body>
</html>