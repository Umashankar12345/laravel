<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
</head>
<body>

<h2>Update User Name</h2>

@if(session('success'))
    <h3>{{ session('success') }}</h3>
@endif

<form action="/update-user" method="POST">

    @csrf

    Email:

    <input type="email"
           name="email">

    <br><br>

    New Name:

    <input type="text"
           name="name">

    <br><br>

    <button type="submit">
        Update
    </button>

</form>

</body>
</html>