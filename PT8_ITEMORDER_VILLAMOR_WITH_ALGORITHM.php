<?php

$menu = [
    "Pepper Steak Onion" => 6.50,
    "Sweet & Sour Chicken" => 6.50,
    "Shrimp Egg Young" => 9.50,
    "Combination Lo Mein" => 7.52,
    "Shrimp Fried Rice" => 6.75,
];


function getPrice($item, $menu) {
    return isset($menu[$item]) ? $menu[$item] : 0;
}

function calculateTax($amount, $isTakeout) {
    return $isTakeout ? $amount * 0.12 : 0;
}

function calculateTotal($item, $quantity, $isTakeout, $menu) {
    $subtotal = getPrice($item, $menu) * $quantity;
    $tax = calculateTax($subtotal, $isTakeout);
    return $subtotal + $tax;
}


$orderSummary = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item = $_POST["item"];
    $quantity = (int) $_POST["quantity"];
    $isTakeout = isset($_POST["takeout"]); 

    $totalAmount = calculateTotal($item, $quantity, $isTakeout, $menu);

    $orderSummary = "
        <div class='summary-box'>
            <h3>Order Summary</h3>
            <p><strong>Item:</strong> $item</p>
            <p><strong>Quantity:</strong> $quantity</p>
            <p><strong>Dine In/Take Out:</strong> " . ($isTakeout ? "Take Out (12% Tax Applied)" : "Dine In") . "</p>
            <p class='total'><strong>Total Amount:</strong> $" . number_format($totalAmount, 2) . "</p>
        </div>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }

        .container {
            max-width: 400px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }

        h2 {
            color: #333;
        }

        select, input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            width: 100%;
            background: #27ae60;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }

        button:hover {
            background: #219150;
        }

        .summary-box {
            background: #fffbf2;
            border-left: 5px solid #ffcc00;
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
            text-align: left;
        }

        .summary-box h3 {
            margin-top: 0;
            color: #333;
        }

        .total {
            font-size: 18px;
            color: #d35400;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Place Your Order</h2>
    <form method="post">
        <label for="item">Select an item:</label>
        <select name="item" required>
            <?php
            foreach ($menu as $item => $price) {
                echo "<option value='$item'>$item - $price</option>";
            }
            ?>
        </select>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" min="1" required>

        <input type="checkbox" name="takeout" value="1">
        <label for="takeout">Takeout (adds 12% tax)</label>

        <button type="submit">Calculate Total</button>
    </form>

    <?php echo $orderSummary; ?>
</div>

</body>
</html>
