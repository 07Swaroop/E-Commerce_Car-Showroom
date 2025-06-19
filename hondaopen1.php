<?php
include_once('header.php');
include('hms/include/config.php');

// Get product ID from URL
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Use prepared statement for security
    $stmt = $con->prepare("SELECT * FROM product WHERE id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($row['proname']); ?> - Product Details</title>
  <style>
    .product-container {
    padding: 60px;
    background-color:rgb(253, 247, 223);
    border-radius: 10px;
}

.product-img {
    max-height: 400px;
    border: 1px solid #ddd;
    border-radius: 5px;
    object-fit: contain;
}

.product-title {
    font-size: 2rem;
    margin-bottom: 15px;
    color: #333;
}

.info-container p {
    font-size: 1.1rem;
    margin: 10px 0;
}

.btn-success {
    padding: 10px 25px;
    font-size: 1rem;
    border-radius: 8px;
}

.alert-message {
    margin-top: 10px;
}
.d1{
  font-size: 20px;
}
 /* tabing content */
 .nav-tabs .nav-link {
      color: #000;
      border: 1px solid #dfdcdc;
      background-color: white;
    }

    .nav-tabs .nav-link.active {
      background-color: rgb(95, 143, 95);
      color: #fff;
      border-color: rgb(95, 143, 95);
    }

    .tab-content {
      background-color: white;
    }

    .tab-content h5 {
      color: #b85c00;
      font-weight: bold;
    }

    .tab-content p {
      font-size: 17px;
    }

    .tab b {
      font-size: 20px;

    }

    .tab-content {
      border: 1px solid rgb(238, 235, 235);
      padding: 20px;
    }

    .services {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      background: #fff;
      border-radius: 10px;
      margin: 40px 0px;
    }

    .service-item {
      text-align: center;
      margin: 10px;
    }

    .service-item img {
      width: 40px;
      margin-bottom: 8px;
    }
  </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container product-container mt-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-5 image-container">
            <img src="hms/images/<?php echo htmlspecialchars($row['proimg']); ?>" alt="Product Image" class="img-fluid product-img">
        </div>

        <!-- Product Info -->
        <div class="col-md-7 info-container">
            <h1 class="product-title"><?php echo htmlspecialchars($row['proname']); ?></h1>
            <p><strong>Price:</strong>Rs. <?php echo htmlspecialchars($row['prodis']); ?>Lakh&nbsp; &nbsp;<strike>Rs. <?php echo htmlspecialchars($row['proprice']); ?>Lakh</strike></p>
            <p class="d1"> </p>
            <p><strong>Description:</strong> <?php echo htmlspecialchars($row['prodesc']); ?></p>
            <p><strong>Average:</strong>  <?php echo htmlspecialchars($row['proavg']); ?></p>
            <p><strong>Rental Price:</strong> Rs. 100 per day</p>
            <p><strong>Availability:</strong> In stock</p>

            <!-- Add to Cart Form -->
            <form class="form-submit">
                <input type="hidden" class="pname" value="<?php echo htmlspecialchars($row['proname']); ?>">
                <input type="hidden" class="pprice" value="<?php echo htmlspecialchars($row['proprice']); ?>">
                <input type="hidden" class="prodis" value="<?php echo htmlspecialchars($row['prodis']); ?>">
                <input type="hidden" class="pimage" value="<?php echo htmlspecialchars($row['proimg']); ?>">
                <input type="hidden" class="pcode" value="<?php echo htmlspecialchars($row['id']); ?>">
                <button type="submit" id="addItem" class="btn btn-success">Add To Cart</button>
                <div class="alert-message mt-2"></div>
            </form>
        </div>
    </div>
</div>
<br><br><br>
<section>
        <div class="container">
          <!-- Tabs Nav -->
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description"
                type="button" role="tab">Product Description</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button"
                role="tab">Services</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button"
                role="tab">Reviews</button>
            </li>
          </ul>
    
          <!-- Tabs Content -->
          <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active tab" id="description" role="tabpanel">
                <h5>   Vehicle Information:</h5><br>
                <ul>
                  <li>Make and Model: The manufacturer and specific type of car.
                      Vehicle Class: Category of the car (e.g., economy, luxury, SUV).</li>
                  <li>Images: Visual representation of the car.</li>
                  <li>Features: Optional features like GPS, AC, or specific equipment.</li>
                  <li>Vehicle Details: License plate, trailer number, chassis number, etc. </li>
                  <li>Battery life and water resistance vary by model. Refer to specifications before use.</li>
                </ul>
      
                <h5>   Booking Information:</h5><br>
                <ul>
                  <li>Booking ID/Reference Number: Unique identifier for the reservation.</li>
                  <li>Pickup and Drop-off Locations: Addresses or locations for car retrieval and return.</li>
                  <li>Pickup and Drop-off Dates and Times: Specific dates and times for booking.</li>
                  <li>Rental Duration: Length of time the car will be rented. </li>
                  <li>Payment Status: Whether the booking is paid or pending.</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="info" role="tabpanel">
              <h5>Returns Policy</h5>
              <div class="services">
                <div class="service-item">
                  <img src="https://img.icons8.com/ios/50/warranty.png" />
                  <p><strong>12 Months</strong><br>Warranty</p>
                </div>
                <div class="service-item">
                  <img src="https://img.icons8.com/ios/50/return-purchase.png" />
                  <p><strong>7 Days</strong><br>Return</p>
                </div>
                <div class="service-item">
                  <img src="https://img.icons8.com/ios/50/worldwide-location.png" />
                  <p><strong>Serviced</strong><br>Across India</p>
                </div>
                <div class="service-item">
                  <img src="https://img.icons8.com/ios/50/shipped.png" />
                  <p><strong>Free Shipping</strong><br>Across India</p>
                </div>
                <div class="service-item">
                  <img src="https://img.icons8.com/ios/50/money.png" />
                  <p><strong>Pay on Delivery</strong><br>Available</p>
                </div>
              </div> 
            </div>
            <div class="tab-pane fade" id="reviews" role="tabpanel">  
                <div class="review-card mb-3">
                  <div class="d-flex align-items-center mb-2">
                    <div class="user-icon"><i class="fa-solid fa-user fa-xl" style="color: #000000; "></i></div>
                    <strong>Umang</strong>
                    <span class="ms-auto text-muted">02/27/2024</span>
                  </div>
                  <div class="star mb-1">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                  <div class="review-title">dvdsvdsvsd</div>
                  <p>dvsvsvfbfs</p>
                </div>
                <div class="review-card mb-3">
                  <div class="d-flex align-items-center mb-2">
                    <div class="user-icon"><i class="fa-solid fa-user fa-xl" style="color: #000000; "></i></div>
                    <strong>Stetson
    
                    </strong>
                    <span class="ms-auto text-muted">08/16/2022</span>
                  </div>
                  <div class="star mb-1">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                  <div class="review-title"> Consequat ac felis donec</div>
                  <p> Pretium lectus quam id leo in vitae turpis massa sed. At lectus urna duis convallis convallis tellus.
                  </p>
                </div>
                <div class="review-card mb-3">
                  <div class="d-flex align-items-center mb-2">
                    <div class="user-icon"><i class="fa-solid fa-user fa-xl" style="color: #000000; "></i></div>
                    <strong>keerthana</strong>
                    <span class="ms-auto text-muted">04/12/2020</span>
                  </div>
                  <div class="star mb-1">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                  <div class="review-title">Barberry</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat...</p>
                </div>
              </div>
    
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
            </div>
          </div>
    
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </div>
      </section>
    
    
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>












</body>
</html>
<?php
    } else {
        echo "<p>Product not found.</p>";
    }
} else {
    echo "<p>No product selected.</p>";
}
include_once('footer.php');
?>
<script>
$(document).ready(function() {
    $(document).on('click', '#addItem', function(e) {
        e.preventDefault();
        var form = $(this).closest(".form-submit");
        var pcode = form.find('.pcode').val();
        var pname = form.find('.pname').val();
        var pimage = form.find('.pimage').val();
        var pprice = form.find('.pprice').val();
        var prodis = form.find('.prodis').val();
        var alertmsg = form.find('.alert-message');

        $.ajax({
            url: 'action.php',
            method: 'post',
            data: { pcode: pcode, pname: pname, pimage: pimage, pprice: pprice, prodis: prodis },
            success: function(response) {
                alertmsg.html(response);
                load_cart_item_number();
            },
            error: function() {
                alertmsg.html('<div class="alert alert-danger">Something went wrong.</div>');
            }
        });
    });

    load_cart_item_number();
    function load_cart_item_number() {
        $.ajax({
            url: 'action.php',
            method: 'get',
            data: { cartItem: "cart_item" },
            success: function(response) {
                $("#cart-item").html(response);
            }
        });
    }
});
</script>