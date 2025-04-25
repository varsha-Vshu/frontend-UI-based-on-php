<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['customer_name']);
    $food = htmlspecialchars($_POST['food_item']);
    $quantity = intval($_POST['quantity']);

    echo "<h1>Order Received</h1>";
    echo "<p>Thank you, <strong>$name</strong>!</p>";
    echo "<p>You have ordered <strong>$quantity</strong> x <strong>$food</strong>.</p>";
    echo "<a href='order.html'>Back to order page</a>";
} else {
    echo "Invalid request.";
}
?>
