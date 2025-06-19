<?php 
include_once("header.php")
?>
  <div class="container my-4" style="border: none; padding: 30px; box-shadow: 2px 2px 10px 2px rgb(209, 209, 209);">
    <div class="row g-4">
      <!-- Left Section -->
      <div class="col-md-7">
        <div class="d-flex align-items-center justify-content-between mb-2">
          <h2 class="car-title ctopen">Toyota </h2>
          <span class="rating-badge">4.4 ★</span>
        </div>
        <p class="text-muted">It comes in both petrol and diesel engine variants. The diesel engine, a 2.8-liter unit, produces 201 bhp and 500 Nm of torque.</p>
        <img src="./Images/toyota fortuner.jpg" alt="Baleno Car" class="car-img rounded shadow-sm" height="500px "/>
      </div>
  
      <!-- Right Section -->
      <div class="col-md-5">
        <div class="price-box shadow-sm">
          <h5 class="mb-3" style="font-size: 25px; color: #6b1d1c; font-weight: 600;">Fortuner Price</h5>
          <p class="mb-1 text-muted">Fortuner price starts from <strong>₹ 7.70 Lakh</strong> and goes up</p>
          <div class="d-flex justify-content-between mb-3">
            <div>
              <label class="form-label">Variant</label>
              <select class="form-select form-select-sm">
                <option>Honda</option>
                <option>Mahindra</option>
                <option>Maruti</option>
                <option>Toyota</option>
              </select>
            </div>
           
          </div>
          <h4 class="text-success">₹  9.14 Lakh <strike class="opens">₹  9. 14Lakh</strike></h4>
          <h4 class="offer" >Upto 10% OFF</h4>
          <small class="text-muted">Avg. Ex-Showroom Price</small>
          <div class="mt-4 border-top pt-3">
            <div class="d-flex justify-content-between align-items-center">
              <span><strong>Fortuner All Variants EMI</strong></span>
              <span>₹ 13,585 for 5 Years</span>
            </div>
            <button class="btn btn-outline-danger btn-sm mt-3 w-100">Get EMI Offers</button>
          </div>
        </div>
  
        <div class="mt-3">
          <a href="Bookcar.php" style="color: #fff; text-decoration: none;"><button class="btn btn-red w-100 btnbook">Booking Processed</button></a>
        </div>
      </div>
    </div>
  </div>
  
  <br><br><br>
  <div class="container my-5">
      <h3 class="mb-4 fw-bold" style="color: #6b1d1c;">Similar Cars To Toyota Suzuki </h3>
    
      <div class="slider-container">
        <div class="slider-track">
          <!-- Card 1 -->
          <div class="car-card sim">
            <img src="./Images/toyota fortuner.jpg" class="car-img carimg1" alt="Car 1">
            <h5 style="color: #6b1d1c; font-weight: 600; padding-top: 10px; font-size: 16px;">Toyota Fortuner</h5>
            <p>₹ 6.84 - 10.19 Lakh<br><small class="text-muted">Avg. Ex-Showroom price</small></p>
            <a href="Bookcar.php"><button class="btn btn-outline-danger btn-sm">Book Now</button></a>
          
          </div>
    
          <!-- Card 2 -->
          <div class="car-card">
            <img src="./Images/Toyota Glanza.jpg" class="car-img carimg1" alt="Car 2">
            <h5 style="color: #6b1d1c; font-weight: 600; padding-top: 10px; font-size: 16px;">Toyota Glanza</h5>
            <p>₹ 6.90 - 10.00 Lakh<br><small class="text-muted">Avg. Ex-Showroom price</small></p>
            <a href="Bookcar.php"><button class="btn btn-outline-danger btn-sm">Book Now</button></a>
          
          </div>
    
          <!-- Card 3 -->
          <div class="car-card">
            <img src="./Images/Toyota Innova Hycross.png" class="car-img carimg1" alt="Car 3">
            <h5 style="color: #6b1d1c; font-weight: 600; padding-top: 10px; font-size: 16px;">Toyota Innova Hycross</h5>
            <p>₹ 5.98 - 8.62 Lakh<br><small class="text-muted">Avg. Ex-Showroom price</small></p>
            <a href="Bookcar.php"><button class="btn btn-outline-danger btn-sm">Book Now</button></a>
        
          </div>
    
          <!-- Card 4 -->
          <div class="car-card">
            <img src="./Images/Toyota Rumion.jpg" class="car-img carimg1" alt="Car 4">
            <h5 style="color: #6b1d1c; font-weight: 600; padding-top: 10px; font-size: 16px;">Toyota Rumion</h5>
            <p>₹ 7.04 - 11.25 Lakh<br><small class="text-muted">Avg. Ex-Showroom price</small></p>
            <a href="Bookcar.php"><button class="btn btn-outline-danger btn-sm">Book Now</button></a>
           
          </div>
    
          <!-- Duplicate for smooth loop -->
          <div class="car-card">
            <img src="./Images/Toyota-Innova-Crysta.jpg" class="car-img carimg1" alt="Car 1">
            <h5 style="color: #6b1d1c; font-weight: 600; padding-top: 10px; font-size: 16px;">Toyota Innova-Crysta</h5>
            <p>₹ 6.84 - 10.19 Lakh<br><small class="text-muted">Avg. Ex-Showroom price</small></p>
            <a href="Bookcar.php"><button class="btn btn-outline-danger btn-sm">Book Now</button></a>
           
          </div>
    
          <div class="car-card">
            <img src="./Images/Toyota-Urban-Cruiser.jpg" class="car-img carimg1" alt="Car 2">
            <h5 style="color: #6b1d1c; font-weight: 600; padding-top: 10px; font-size: 16px;">Toyota Urban-Cruiser </h5>
            <p>₹ 6.90 - 10.00 Lakh<br><small class="text-muted">Avg. Ex-Showroom price</small></p>
            <a href="Bookcar.php"> <button class="btn btn-outline-danger btn-sm">Book Now </button></a>
          
          </div>
    
          <!-- Add more if needed -->
        </div>
      </div>
    </div>

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
    
    
    
    










      <?php 
include_once("footer.php")
?>