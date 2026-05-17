
<form method="POST" action="/submit-form">
    @csrf
    Name: <input type="text" name="name"> <br> <br>
    Email: <input type="email" name="email"> <br> <br>
    Password: <input type="password" name="password"> <br> <br>
    Confirm Password: <input type="password" name="confirm_password"> <br> <br>
    Age: <input type="number" name="age"> <br> <br>
    <input type="submit" value="Register">
</form>
