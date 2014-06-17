<?php
    if(isset($_POST['email'])) {
         
        // EDIT THE 2 LINES BELOW AS REQUIRED
        $email_to = "piermaria@belafonte.co";
        $email_subject = "Mail details";
         
        
        $ime = $_POST['name']; // required
        $email_from = $_POST['email']; // required
        $text = $_POST['message']; // required
         
        $email_message = "Mail details from Modus \n\n";
         
        function clean_string($string) {
          $bad = array("content-type","bcc:","to:","cc:","href");
          return str_replace($bad,"",$string);
        }
         
        $email_message .= "Name: ".clean_string($ime)."\n";
        $email_message .= "Email: ".clean_string($email_from)."\n";

        $email_message .= "Message: ".clean_string($text)."\n";
         
         
    // create email headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers); 

}
?>
 

  <?php
    include 'index.html';
  ?>