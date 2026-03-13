<!DOCTYPE html>
<html>
<head>
<title>Restaurant Reservation</title>
</head>

<body>

<h2>Restaurant Reservation Form</h2>

<form method="POST" action="/reservation">
@csrf

<label>Name:</label><br>
<input type="text" name="name"><br><br>

<label>Number of Guests:</label><br>
<input type="number" name="guests"><br><br>

<label>Date:</label><br>
<input type="date" name="date"><br><br>

<label>Special Requests:</label><br>
<textarea name="requests"></textarea><br><br>

<button type="submit">Reserve</button>

</form>

</body>
</html>