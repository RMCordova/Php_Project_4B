<!DOCTYPE html>
<html>
<head>
    <title>Total Sales Calculator</title>
</head>
<body>
    <h1>Total Sales Calculator</h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="productName">Select Product:</label>
        <select name="productName" id="productName">
            <option value="Product A">Product A</option>
            <option value="Product B">Product B</option>
            <option value="Product C">Product C</option>
        </select>
        <input type="submit" value="Calculate Total Sales">
    </form>

    <?php
    function calculateTotalSales($salesData, $productName) {
        $lines = explode("\n", $salesData);
        $totalSales = 0.0;

        foreach ($lines as $line) {
            $fields = explode(',', $line);
            if (count($fields) === 3) {
                $product = trim($fields[0]);
                $saleAmount = (float) trim($fields[1]);
                $quantity = (int) trim($fields[2]);

                if ($product === $productName) {
                    $totalSales += $saleAmount * $quantity;
                }
            }
        }

        return number_format($totalSales, 2, '.', ''); 
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $salesData = "Product A,100.50,5
                      Product B,75.25,3
                      Product A,50.25,2
                      Product C,30.00,1
                      Product A,75.50,4";

        $productName = $_POST['productName'];
        $totalSales = calculateTotalSales($salesData, $productName);
        echo "Total sales for $productName: PHP" . $totalSales;
    }
    ?>
</body>
</html>
