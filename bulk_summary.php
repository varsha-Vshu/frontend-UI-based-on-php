<?php
function clean($data) {
  return htmlspecialchars(trim($data));
}

$name = clean($_POST['name']);
$phone = clean($_POST['phone']);
$event_date = clean($_POST['event_date']);
$order_details = nl2br(clean($_POST['order_details']));
$instructions = nl2br(clean($_POST['instructions']));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bulk Order Summary</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <style>
    body { padding: 40px; background: #f7f7f7; }
    .summary-box { background: white; padding: 30px; border-radius: 10px; }
  </style>
</head>
<body>

<div class="container">
  <h2 class="mb-4">Bulk Order Submitted</h2>
  <div class="summary-box">
    <p><strong>Name:</strong> <?= $name ?></p>
    <p><strong>Phone:</strong> <?= $phone ?></p>
    <p><strong>Event Date:</strong> <?= $event_date ?></p>
    <p><strong>Order Details:</strong><br><?= $order_details ?></p>
    <?php if ($instructions): ?>
      <p><strong>Instructions:</strong><br><?= $instructions ?></p>
    <?php endif; ?>
  </div>

  <a href="index.html" class="btn btn-primary mt-4">Back to Home</a>
</div>

</body>
</html>
