<?php 
session_start();
include_once("header.php");
include('hms/include/config.php');

// Initialize totals
$grand_total = 0;
$allItems = "";
$items = [];
$test = [];
$pid=[];

$ret = mysqli_query($con, "SELECT CONCAT(proname, '(', quantity, ')') AS ItemQty, total_price, cart_id,product_code FROM cart");
while ($row = mysqli_fetch_assoc($ret)) {
    $grand_total += $row['total_price'];
    $items[] = $row['ItemQty'];
    $test[] = $row['cart_id'];
    $pid[]=$row['product_code'];
}
$pid1=implode(', ',$pid);
$test1 = implode(',', array_map('intval', $test));
$allItems = htmlspecialchars(implode(', ', $items));
?>

<style>
    body { background-color: #f8f9fa; }
    .order-form {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        padding: 20px;
        margin: 20px auto;
        max-width: 600px;
    }
    .form-control { border-radius: 5px; }
    .btn-danger {
        background-color: rgb(250, 175, 183);
        color: black;
        font-weight: bold;
        border: none;
    }
    .btn-danger:hover {
        background-color: black;
        color: white;
    }
</style>

<div class="container mt-5">
    <div class="order-form">
        <h3 class="text-center">Place Your Order</h3>

        <?php if ($grand_total > 0): ?>
        <form method="post" id="placeOrder">
            <input type="hidden" name="products" value="<?= $allItems ?>">
            <input type="hidden" name="grand_total" value="<?= htmlspecialchars($grand_total) ?>">
            <input type="hidden" name="testid" value="<?= htmlspecialchars($test1) ?>">
            <input type="hidden" name="pid" value="<?= htmlspecialchars($pid1) ?>">


            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Enter name" required>
            </div>

            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Enter email" required>
            </div>

            <div class="form-group">
            <input type="text" name="phone" pattern="[0-9]{10,15}" title="Enter a valid phone number" placeholder="Enter Phone" required>
</div>


            <div class="form-group">
                <textarea name="address" class="form-control" rows="3" placeholder="Enter address" required></textarea>
            </div>

            <h6 class="text-center lead">Select Payment Mode</h6>
            <div class="form-group">
                <select name="pmode" class="form-control" required>
                    <option value="">Select payment</option>
                    <option value="Cash on Delivery">Cash on Delivery</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-danger btn-block" value="Place Order">
            </div>
        </form>

        <div class="form-group mt-4">
            <a href="cart.php" id="cancelOrder" class="btn btn-secondary btn-block">Cancel Order</a>
        </div>
        <?php else: ?>
        <div class="text-center">
            <h5 class="text-muted">Your cart is empty.</h5>
            <a href="index.php" class="btn btn-outline-primary mt-3">Go to Shop</a>
        </div>
        <?php endif; ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    $('#placeOrder').submit(function (e) {
        e.preventDefault();

        const phone = $('input[name="phone"]').val().trim();
        const email = $('input[name="email"]').val().trim();
        const pmode = $('select[name="pmode"]').val();

        if (!/^[1-9]\d{9}$/.test(phone)) {
            alert('Enter a valid 10-digit phone number that does not start with 0.');
            return;
        }

        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            alert('Enter a valid email address.');
            return;
        }

        if (!pmode) {
            alert('Please select a payment method.');
            return;
        }

        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: $('#placeOrder').serialize() + "&action=order",
            beforeSend: function () {
                $('.btn-danger').val('Placing Order...').prop('disabled', true);
            },
            success: function (response) {
                if (response.trim() === "success") {
                    window.location.href = "thankyou.php";
                } else {
                    $('#placeOrder').after("<div class='alert alert-danger mt-3'>" + response + "</div>");
                    $('.btn-danger').val('Place Order').prop('disabled', false);
                }
            }
        });
    });

    $('#cancelOrder').click(function (e) {
        e.preventDefault();
        if (confirm("Are you sure you want to cancel the order?")) {
            window.location.href = "cart.php";
        }
    });
});
</script>

<?php include_once("footer.php"); ?>


<!-- checkout.php file -->