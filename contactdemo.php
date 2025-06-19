<?php 
include_once("header.php");

?>
<div class="container my-5">
  <div class="text-center mb-4">
    <p class="text-muted"><small>🏠 How can we help you?</small></p>
    <h5 class="fw-bold">How Can We Help You?</h5>
    <p class="fw-bold">Our Location</p>
  </div>

  <!-- Contact Info Boxes -->
  <div class="row mb-4">
    <div class="col-md-4 mb-3">
      <div class="contact-info">
        <i class="bi bi-geo-alt-fill"></i>
        <h5>Autovio</h5>
        <p>No: 58, A, United States</p>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="contact-info">
        <i class="bi bi-telephone-fill"></i>
        <h5>Telephone</h5>
        <p>+123-456-7890</p>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="contact-info">
        <i class="bi bi-printer-fill"></i>
        <h5>Fax</h5>
        <p>123456789</p>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row rowabout3">
    <div class="col-md-6">
      <!-- Google Map -->
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60952.88666487998!2d74.15605518720724!3d17.28873079670282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc182450c753bad%3A0xb3493b19ae7886ca!2sKarad%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1719386459270!5m2!1sen!2sin"
        width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="col-md-6">
      <form method="POST" enctype="multipart/form-data" id="contactform" style="padding: 40px;" action="submit_contact.php">
        <div class="row">
          <div class="form-group col-12">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name *" required>
            <label class="text-danger" id="nameErr"></label>
          </div>
          <div class="form-group col-12">
            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email *" required>
            <label class="text-danger" id="emailErr"></label>
          </div>
          <div class="form-group col-12">
            <input type="number" class="form-control" id="phone" name="phone" placeholder="Mobile Number *" required>
            <label class="text-danger" id="phoneErr"></label>
          </div>
          <div class="form-group col-12">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Your Subject *" required>
            <label class="text-danger" id="subjectErr"></label>
          </div>
          <div class="form-group col-12">
            <textarea id="message" name="message" class="form-control" rows="3" placeholder="Your Message *" required></textarea>
            <label class="text-danger" id="messageErr"></label>
          </div>
        </div>
        <div class="submit">
          <center><button type="submit" id="btnSubmit" class="btn btn-primary">Send Message</button></center>
        </div>
        <div id="mail-status" class="mt-3 text-center"></div>
      </form>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {
    $("#btnSubmit").click(function (event) {
      event.preventDefault();

      // Form validation
      let valid = true;
      if ($('#name').val().trim() === '') {
        $('#nameErr').text("Please provide Name");
        $('#name').focus();
        valid = false;
      }
      if ($('#email').val().trim() === '') {
        $('#emailErr').text("Please provide Email");
        $('#email').focus();
        valid = false;
      }
      if ($('#phone').val().trim() === '') {
        $('#phoneErr').text("Please provide Mobile Number");
        $('#phone').focus();
        valid = false;
      }
      if ($('#subject').val().trim() === '') {
        $('#subjectErr').text("Please provide Subject");
        $('#subject').focus();
        valid = false;
      }
      if ($('#message').val().trim() === '') {
        $('#messageErr').text("Please provide Message");
        $('#message').focus();
        valid = false;
      }
      if (!valid) return;

      let data = new FormData($('#contactform')[0]);

      $("#btnSubmit").prop("disabled", true);

      $.ajax({
        type: "POST",
        url: "send_email.php",
        url: " submit_contact.php",
       
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        success: function (response) {
          $("#mail-status").removeClass('text-danger').addClass('text-success').text("We have received your enquiry successfully!");
          $("#btnSubmit").prop("disabled", false);
          $('#contactform')[0].reset();
        },
        error: function () {
          $("#mail-status").removeClass('text-success').addClass('text-danger').text("Something went wrong. Please try again!");
          $("#btnSubmit").prop("disabled", false);
        }
      });
    });
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php include_once("footer.php"); ?>
