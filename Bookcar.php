<?php 
include_once("header.php")
?>
<section class="book">
  <div class="container booking-container">
    <h3 class="booking-title"><i class="bi bi-car-front-fill me-2"></i>Book Your Car</h3>
  
    <form>
      <!-- Name -->
      <div class="form-section">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
      </div>
  
      <!-- Email -->
      <div class="form-section">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
      </div>
  
      <!-- Phone -->
      <div class="form-section">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="phone" placeholder="+91 XXXXX XXXXX" required>
      </div>
  
      <!-- Brand Select -->
      <div class="form-section">
        <label for="brand" class="form-label">Select Brand</label>
        <select class="form-select" id="brand" required onchange="updateModels()">
          <option value="" disabled selected>Choose Brand</option>
          <option value="maruti">Maruti Suzuki</option>
          <option value="hyundai">Hyundai</option>
          <option value="toyota">Toyota</option>
        </select>
      </div>
  
      <!-- Model Select (dependent) -->
      <div class="form-section">
        <label for="model" class="form-label">Select Model</label>
        <select class="form-select" id="model" required>
          <option value="" disabled selected>Select brand first</option>
        </select>
      </div>
  
      <!-- Booking Date & Time -->
      <div class="row">
        <div class="col-md-6 form-section">
          <label for="date" class="form-label">Preferred Date</label>
          <input type="date" class="form-control" id="date" required>
        </div>
        <div class="col-md-6 form-section">
          <label for="time" class="form-label">Preferred Time</label>
          <input type="time" class="form-control" id="time" required>
        </div>
      </div>
  
      <!-- Address -->
      <div class="form-section">
        <label for="address" class="form-label">Address</label>
        <textarea class="form-control" id="address" rows="3" placeholder="Your full address..." required></textarea>
      </div>
  
      <!-- Submit Button -->
      <div class="text-center">
        <button type="submit" class="btn btn-book mt-3">Book Now</button>
      </div>
    </form>
  </div>
  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Brand & Model Logic -->
  <script>
    const carModels = {
      maruti: ["Baleno", "Swift", "Wagon R", "Dzire"],
      hyundai: ["i20", "Grand i10 Nios", "Venue", "Verna"],
      toyota: ["Glanza", "Innova", "Fortuner", "Urban Cruiser"]
    };
  
    function updateModels() {
      const brand = document.getElementById("brand").value;
      const modelSelect = document.getElementById("model");
  
      // Clear current options
      modelSelect.innerHTML = '<option disabled selected>Select model</option>';
  
      if (carModels[brand]) {
        carModels[brand].forEach(model => {
          const option = document.createElement("option");
          option.value = model;
          option.textContent = model;
          modelSelect.appendChild(option);
        });
      }
    }
  </script>
  </section>
<?php 
include_once("footer.php")
?>


  