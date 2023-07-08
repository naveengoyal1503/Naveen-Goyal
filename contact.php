<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $to = "naveengoyal002@gmail.com"; // Replace with your email address
  $headers = "From: $name <$email>";
  $body = "Subject: $subject\n\n$message";

  // Send email
  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for contacting us! We will get back to you soon.";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>
