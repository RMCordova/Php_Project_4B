<!DOCTYPE html>
<html>
<head>
    <title>Product Management</title>
</head>
<body>
    <h1>Product Management</h1>

    <?php
    class Product {
        private $name;
        private $price;
        private $quantity;

        public function __construct($name, $price, $quantity) {
            $this->name = $name;
            $this->price = $price;
            $this->quantity = $quantity;
        }

        public function getTotalPrice() {
            return $this->price * $this->quantity;
        }

        public function addToStock($quantity) {
            $this->quantity += $quantity;
        }

        public function sell($quantity) {
            if ($quantity <= $this->quantity) {
                $this->quantity -= $quantity;
                return true;
            } else {
                return "Insufficient stock.";
            }
        }
    }

    $product = new Product("Widget", 10.99, 50);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['addStock'])) {
            $quantityToAdd = (int)$_POST['addStockQuantity'];
            $product->addToStock($quantityToAdd);
        } elseif (isset($_POST['sellStock'])) {
            $quantityToSell = (int)$_POST['sellStockQuantity'];
            $result = $product->sell($quantityToSell);
            if ($result !== true) {
                echo "Sale failed. " . $result . "\n";
            }
        }
    }
    ?>

    <p>Product: <?php echo $product->name; ?></p>
    <p>Price: $<?php echo number_format($product->price, 2); ?></p>
    <p>Current Stock: <?php echo $product->quantity; ?></p>
    <p>Total Price: $<?php echo number_format($product->getTotalPrice(), 2); ?></p>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="addStockQuantity">Add to Stock:</label>
        <input type="number" name="addStockQuantity" id="addStockQuantity" required>
        <input type="submit" name="addStock" value="Add">
    </form>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="sellStockQuantity">Sell Stock:</label>
        <input type="number" name="sellStockQuantity" id="sellStockQuantity" required>
        <input type="submit" name="sellStock" value="Sell">
    </form>
</body>
</html>
