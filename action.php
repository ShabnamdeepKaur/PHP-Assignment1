<?php
include_once 'database.php';

// Get user input from the form
$name = $_POST['name'];
$email = $_POST['email'];
$pizzaType = $_POST['pizza_type'];
$pizzaSize = $_POST['pizza_size'];
$dip = $_POST['dip'];

// Insert the order into the database
$query = "INSERT INTO pizza (name, email, pizza_type, pizza_size, dip) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("sssss", $name, $email, $pizzaType, $pizzaSize, $dip);
$stmt->execute();
$stmt->close();

// DISPLAY DATA
echo "<h2>Order Summary</h2>";
echo "<p>Name: $name</p>";
echo "<p>Email: $email</p>";
echo "<p>Pizza Type: $pizzaType</p>";
echo "<p>Pizza Size: $pizzaSize</p>";
echo "<p>Dip: $dip</p>";

// Display a thank you message
echo "Thank you 🎀 for your order, $name! Your $pizzaType pizza 🍕 will be on its way. Have a good One 😊";
