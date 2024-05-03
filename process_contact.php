<?php

// Define your recipient email address (replace with your Gmail address)
$to = "dinhquockhanhsiu@gmail.com";

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Collect form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Construct the email content
  $body = "Name: $name \n";
  $body .= "Email: $email \n";
  $body .= "Subject: $subject \n\n";
  $body .= "Message: \n$message";

  // Set email headers (replace with your website domain if different)
  $headers = "From: noreply@" . $_SERVER["qkhanhgt6.github.io"] . "\r\n";
  $headers .= "Reply-To: $email \r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo "Your message has been sent successfully!";
  } else {
    echo "Error sending message. Please try again later.";
  }
}

?>
