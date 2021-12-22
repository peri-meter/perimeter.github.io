
 <?php  
 
 if(isset($_POST['submit'])) {
  $mailto = "hiruyfasil22@gmail.com";  //My email address
  //getting customer data
  $name = $_POST['fname']; //getting customer name
  $fromEmail = $_POST['email']; //getting customer email
  $phone = $_POST['phone']; //getting customer Phome number
  $city = $_POST['city'];
  $subcity = $_POST['subcity'];
  $wereda = $_POST['wereda'];
  $shares = $_POST['shares'];
  $birr = $_POST['birr'];
  $banks = $_POST['banks'];
  $bank = $_POST['bank'];
  $aname = $_POST['aname'];
  $aphone = $_POST['aphone'];
  $subject = "Share Subscription"; //getting subject line from client
  //$subject2 = "Confirmation: Application was submitted successfully"; // For customer confirmation
  
  //Email body I will receive
  $message = "Cleint Name: " . $fname . "\n"
  . "Phone Number: " . $phone . "\n\n"
  . "Email:" .$email ."\n\n"
  . "Address: " . $_POST['city'] .$_POST['subcity'] .$_POST['wereda'] ."\n\n"
  . "Amount of Share: " .$_POST['shares'] ."\n\n"
  . "Shares Value " .$_POST['birr'] ."birr" ."\n\n"
  . "Bank Name: " .$_POST['banks'] ."\n\n"
  . "Bank Account Number: " .$_POST['bank'] ."\n\n"
  . "Agent's Name: ".$_POST['aname'] ."\n\n"
  . "Agent's Phone: ".$_POST['aphone'] ."\n";
  
  /*
  //Message for client confirmation
  $message2 = "Dear" . $name . "\n"
  . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
  . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
  . "Regards," . "\n" . "- HMA WebDesign";
  */
  
  //Email headers
  $headers = "From: " . $fromEmail; // Client email, I will receive
 // $headers2 = "From: " . $mailto; // This will receive client
  
  //PHP mailer function
  
   $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address

  // $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
  
   //Checking if Mails sent successfully
  
   if ($result1) {
     echo '<script type = "text/javascript">alter("Application was sent Successfully!") </script>';
   } else {
    echo '<script type = "text/javascript">alter("Submission failed! Try again") </script>';
}
  
 }
  
 ?>