<?php
// Connect to database
include('include/config.php'); // Adjust path if your config is somewhere else

// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs
    $name    = mysqli_real_escape_string($con, $_POST["cname"]);
    $email   = mysqli_real_escape_string($con, $_POST["cemail"]);
    $phone   = mysqli_real_escape_string($con, $_POST["phone"]);
    $subject = mysqli_real_escape_string($con, $_POST["csub"]);
    $message = mysqli_real_escape_string($con, $_POST["cmsg"]);

    // Insert into contact_messages table
    $sql = "INSERT INTO contact_messages (name, email, phone, subject, message)
            VALUES ('$name', '$email', '$phone', '$subject', '$message')";

    if (mysqli_query($con, $sql)) {
        echo "Message saved successfully.";
    } else {
        http_response_code(500);
        echo "Error: " . mysqli_error($con);
    }
} else {
    http_response_code(400);
    echo "Invalid request.";
}
?>
