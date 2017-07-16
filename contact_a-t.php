<?php
  $to      = 'aroundtown30@gmail.com';
  $subject = "Message from " . $_POST["name"] . ", sent from aroundtown30.com";
  $message = 
    "From: " . $_POST["name"] . "\n\n" . 
    "Email Address: " . $_POST["email"] . "\n" . 
    "Message: " . "\n" . $_POST["message"];
  $headers = 'From: no_reply@aroundtown30.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);

  $to = $_POST["email"];
  $subject = "You sent a message to Around Town with Dallas & RaeJ";
  $message = "Hey, " . $_POST["name"] . ".\n\n" . "We recently recieved a message from you and we thank you " . 
             "for viewing Around Town and reaching out to us. We will read your message and respond to you within " . 
             "the next day or two. \n\n" . 
             "We've included a copy of the message you sent to us below.\n\n" . 
             "\"" . $_POST["message"] . "\"\n\n" . 
             "Thank you so much for your feedback and we hope you tune in to the next episode of Around Town! \n\n" .
             "Signed, " . "\n\n" . 
             "Dallas & RaeJ";
  $headers = "From: noreply@aroundtown30.com" . "\r\n" . 
             "X-Mailer: PHP/" . phpversion(); 

  mail($to, $subject, $message, $headers);
?>

<html>
  <script>window.location.href = "http://aroundtown30.com/index.php?contact_at=complete#contact_a-t";</script>
</html>