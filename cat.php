<?php
include_once("header.php");
include('hms/include/config.php');

// Enable error reporting for debugging
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<section class="h8">
  <div class="container">
    <div class="hcon1">
      <h2 style="padding-top: 100px; color: white;">Honda Cars</h2>
      <h4 style="color: #fce3b5; font-weight: 400; font-family: sans-serif; font-size: 18px;">
        <a href="index.html" style="color: white; font-size: 18px; font-family:sans-serif;">HOME < </a> cars
      </h4>
    </div>
  </div>
</section>

<br><br><br>

<div class="container back1">
  <div class="row rowabout1">
    <?php
    if (isset($_GET['id'])) {
      $id = intval($_GET['id']);
      $slugQuery = mysqli_query($con, "SELECT catslug FROM category WHERE id = $id");

      if ($slugRow = mysqli_fetch_array($slugQuery)) {
        $catslug = $slugRow['catslug'];

        // Fetch all products with the same catslug
        $productQuery = mysqli_query($con, "SELECT * FROM category WHERE catslug = '$catslug'");

        while ($row = mysqli_fetch_array($productQuery)) {
    ?>
          <div class="col-md-6 mb-4">
            <img src="hms/images/<?php echo $row['proimg']; ?>" alt="<?php echo $row['proname']; ?>" height="300px" width="100%">
          </div>

          <div class="col-md-6 mb-4 colinfo2">
            <h2 class="nam"><?php echo $row['proname']; ?></h2>
            <p>It features a 998cc engine, available with manual or automatic transmissions, and is a popular choice for city driving and commuting.</p>
            <h5 class="ha"><?php echo $row['proavg']; ?></h5>
            <h3>Rs. <?php echo $row['prodis']; ?> Lakh <strike>Rs. <?php echo $row['proprice']; ?> Lakh</strike></h3>
            <span class="off">Offers</span>
            <h5 class="ha">Avg. Ex-Showroom price</h5>

            <a href="hondaopen1.php?id=<?php echo $row['id']; ?>">
              <input type="button" class="check" value="View Details">
            </a>

            <!-- Add to Cart Form -->
            <form class="form-submit mt-2">
              <input type="hidden" class="pname" value="<?php echo $row['proname']; ?>">
              <input type="hidden" class="pprice" value="<?php echo $row['proprice']; ?>">
              <input type="hidden" class="pimage" value="<?php echo $row['proimg']; ?>">
              <input type="hidden" class="pcode" value="<?php echo $row['id']; ?>">
              <div class="alert-message mt-2 text-success"></div>
              <button type="button" id="addItem" class="check mt-2">Add to Cart</button>
            </form>
          </div>
    <?php
        }
      } else {
        echo "<div class='col-12'><p class='text-danger'>Invalid category ID.</p></div>";
      }
    } else {
      echo "<div class='col-12'><p class='text-warning'>No category ID provided.</p></div>";
    }
    ?>
  </div>
</div>

<br><br>

<?php include_once("footer.php"); ?>

<!-- Include jQuery (important) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function () {
    // Add to Cart
    $(document).on('click', '#addItem', function (e) {
      e.preventDefault();

      var form = $(this).closest(".form-submit");
      var pcode = form.find('.pcode').val();
      var pname = form.find('.pname').val();
      var pimage = form.find('.pimage').val();
      var pprice = form.find('.pprice').val();
      var alertmsg = form.find('.alert-message');

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pcode: pcode,
          pname: pname,
          pimage: pimage,
          pprice: pprice
        },
        success: function (response) {
          alertmsg.html(response);
          load_cart_item_number();
        }
      });
    });

    // Load Cart Item Count
    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: { cartItem: "cart_item" },
        success: function (response) {
          $("#cart-item").html(response);
        }
      });
    }

    load_cart_item_number();
  });
</script>
