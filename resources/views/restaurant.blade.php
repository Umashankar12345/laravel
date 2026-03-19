<!DOCTYPE html>
<html>
<head>
    <title>Restaurant Reservation</title>
</head>
<body>

<h2>Restaurant Reservation Form</h2>

<form method="POST" action="/restaurant">
    @csrf

    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Number of Guests:</label><br>
    <input type="number" name="guests" required><br><br>

    <label>Date of Reservation:</label><br>
    <input type="date" name="date" required><br><br>

    <label>Special Requests:</label><br>
    <textarea name="requests"></textarea><br><br>

    <button type="submit">Reserve Table</button>

</form>

</body>
</html>