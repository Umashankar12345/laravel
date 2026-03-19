<!DOCTYPE html>
<html>
<head>
    <title>Reservation Details</title>
</head>
<body>

<h2>Reservation Details</h2>

<p><strong>Name:</strong> {{ $data['name'] }}</p>

<p><strong>Number of Guests:</strong> {{ $data['guests'] }}</p>

<p><strong>Date of Reservation:</strong> {{ $data['date'] }}</p>

<p><strong>Special Requests:</strong> {{ $data['requests'] }}</p>

</body>
</html>