<form action="/store" method="POST">
    @csrf

    Name:
    <input type="text" name="name">
    <br><br>

    Email:
    <input type="email" name="email">
    <br><br>

    Age:
    <input type="number" name="age">
    <br><br>

    <button type="submit">Save</button>
</form>