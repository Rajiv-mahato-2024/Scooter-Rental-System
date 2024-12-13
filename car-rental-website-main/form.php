<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="book.php" method="POST">
    <label for="scooter_id">Scooter ID:</label>
    <input type="number" name="scooter_id" id="scooter_id" required>

    <label for="booking_date">Booking Date:</label>
    <input type="date" name="booking_date" id="booking_date" required>

    <label for="return_date">Return Date:</label>
    <input type="date" name="return_date" id="return_date" required>

    <label for="total_cost">Total Cost:</label>
    <input type="number" name="total_cost" id="total_cost" step="0.01" required>

    <button type="submit" name="book_scooter">Book Now</button>
</form>
 
</body>
</html>