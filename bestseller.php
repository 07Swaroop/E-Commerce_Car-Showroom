<?php
include 'hms/include/config.php';

$products = [];

// Step 1: Fetch all ordered product strings
$sql = mysqli_query($con, "SELECT product FROM order");
while ($row = mysqli_fetch_assoc($sql)) {
    $order_products = explode(',', $row['product']);
    foreach ($order_products as $prod) {
        preg_match('/([a-zA-Z0-9\s\-]+)\((\d+)\)/', $prod, $matches);
        if (!empty($matches)) {
            $name = trim($matches[1]);
            $qty = (int)$matches[2];
            if (isset($products[$name])) {
                $products[$name] += $qty;
            } else {
                $products[$name] = $qty;
            }
        }
    }
}

// Step 2: Sort by quantity sold
arsort($products);
$top_products = array_keys(array_slice($products, 0, 4, true)); // top 4

// Step 3: Display from `product` table
foreach ($top_products as $product_name) {
    $query = mysqli_query($con, "SELECT * FROM product WHERE proname = '$product_name' LIMIT 1");
    if ($row = mysqli_fetch_assoc($query)) {
        ?>
        <div class="col-md-3">
            <div class="car">
                <img src="hms/images/<?php echo $row['proimg']; ?>" height="200px" width="200px">
                <h5><?php echo $row['proname']; ?></h5>
                <p>Rs. <?php echo $row['prodis']; ?> <strike>Rs.<?php echo $row['proprice']; ?></strike></p>
                <a href="view.php?pid=<?php echo $row['id']; ?>" class="btn btn-primary">View</a>
            </div>
        </div>
        <?php
    }
}
?>
