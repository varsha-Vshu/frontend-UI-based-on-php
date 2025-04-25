<?php
function sanitize($data) {
  return htmlspecialchars(trim($data));
}

$name = sanitize($_POST['customer_name']);
$total = sanitize($_POST['total']);

$items = [
  'Paneer Butter Masala' => ['key' => 'paneer', 'price' => 200],
  'Chicken Biryani' => ['key' => 'biryani', 'price' => 250],
  'Veg Pulao' => ['key' => 'pulao', 'price' => 150],
  'Gulab Jamun' => ['key' => 'jamun', 'price' => 20]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Summary</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <style>
    body { background-color: #fff; padding: 30px; }
    .summary-box { background-color: #f1f1f1; padding: 20px; border-radius: 8px; }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="mb-4">Thank You, <?= $name ?>!</h2>
    <div class="summary-box">
      <h4>Your Order Summary:</h4>
      <ul class="list-group mb-3">
        <?php foreach ($items as $label => $item): 
          $qty = intval($_POST[$item['key']]);
          if ($qty > 0): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <?= $label ?> × <?= $qty ?>
              <span>₹<?= $qty * $item['price'] ?></span>
            </li>
        <?php endif; endforeach; ?>
      </ul>

      <h5><strong>Total Amount:</strong> ₹<?= $total ?></h5>
    </div>

    <a href="index.html" class="btn btn-primary mt-4">Back to Home</a>
  </div>
</body>
</html>
