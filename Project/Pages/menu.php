<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menu</title>
</head>
<body>

<?php

// Function to display the menu options
function displayMenu() {
    echo "1. Food Menu Item 1\n";
    echo "2. Food Menu Item 2\n";
    echo "3. Food Menu Item 3\n";
    echo "4. Food Menu Item 4\n";
    echo "5. Food Menu Item 5\n";
}

// Process user input
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedOption = isset($_POST['menu_option']) ? $_POST['menu_option'] : '';

    switch ($selectedOption) {
        case '1':
            echo "You selected Food Menu Item 1!";
            break;
        case '2':
            echo "You selected Food Menu Item 2!";
            break;
        case '3':
            echo "You selected Food Menu Item 3!";
            break;
        case '4':
            echo "You selected Food Menu Item 4!";
            break;
        case '5':
            echo "You selected Food Menu Item 5!";
            break;
        default:
            echo "Invalid selection!";
    }
}

?>

<!-- Display the menu form -->
<form method="post">
    <h2>Food Menu</h2>
    <?php displayMenu(); ?>
    <label for="menu_option">Select an option:</label>
    <input type="number" name="menu_option" min="1" max="5" required>
    <button type="submit">Submit</button>
</form>

</body>
</html>
```

This code defines a simple HTML form with a PHP script. It displays a menu with five food items, and when the user selects an option and submits the form, it processes the input and displays a message based on the selected option.