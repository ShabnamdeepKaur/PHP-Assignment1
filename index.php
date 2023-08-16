<!DOCTYPE html>
<html>
<head>
    <title>Pizza Order Form</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Pizza Order Form</h1>
        <form action="action.php" method="post">
            <!-- NAME OF THE CUSTOMER -->
            <label for="name">Name:</label>
            <input type="text" name="name" required>
            
            <!-- EMAIL ID OF THE CUSTOMER -->
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            
            <!-- NAME OF THE PIZZA -->
            <label for="pizza_type">Pizza Type:</label>
            <select name="pizza_type" required>
                <option value="none">Select your pizza</option>
                <option value="Margherita">Margherita</option>
                <option value="Pepperoni">Pepperoni</option>
                <option value="Vegetarian">Vegetarian</option>
            </select>

            <!-- SIZE OF THE PIZZA -->
            <label for="pizza_size">Pizza Size:</label>
            <select name="pizza_size" required>
                <option value="none">Select the size of your pizza</option>
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
                <option value="X-Large">X-Large</option>
            </select>

            <!-- DIP -->
            <label for="dip">Choose your dip:</label>
            <select name="dip" required>
                <option value="none">Select your dip</option>
                <option value="Creamy Garlic">Creamy Garlic</option>
                <option value="Cheesy">Cheesy</option>
                <option value="Ranch">Ranch</option>
                <option value="Salsa">Salsa</option>
            </select>
            
            <!-- SUBMIT BUTTON -->
            <input type="submit" value="Place Order">
        </form>
    </div>
</body>
</html>
