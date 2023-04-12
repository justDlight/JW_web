<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
  <link rel="stylesheet" href="CSS/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="https://lightintime.com/img/JW.jpg">
	<style>
		body {
			background-color: black;
			color: white;
		}
    #thank-you-txt {
      text-align: center;
      margin-top: 7%;
      color: #01FF56;
      margin-left: 30%;
      margin-right: 30%;
    }
    #resume-btn-1 {
    text-align: center;
    justify-content: center;
    padding-top: 10px;
    height: 50px;
    width: 150px;
    cursor: pointer;
    display: block;
    margin-left: auto;
    margin-right: auto;
    background-color: #01FF56;
    color: rgb(0, 0, 0);
    border: #01FF56 solid 1px;
    margin-top: 7%;
}
	</style>
</head>
<body>
  <?php
if(isset($_POST['email'])) {
     
    // EDIT THE FOLLOWING TWO LINES:
    $email_to = "John.weiss1996@gmail.com";
    $email_subject = "Website Contact Form Submission";
     
    function died($error) {
        // your error code can go here
        echo "<h1 id='error-heading' class='error-heading' style='color: red; text-align: center; margin-top: 5%; margin-bottom: 5%;'>We are very sorry, but there were error(s) found with the form you submitted.</h1>";
        echo "<h2 style='color: red; text-align: center;'>These errors appear below.</h2>";
        echo "<h2 style='color: red; text-align: center;'>" . $error . "</h2>";
        echo "<h2 style='color: red; text-align: center;'>Please go back and fix these errors.</h2>";
        echo "<div style='text-align:center'>
        <button 
        style='background-color: #4CAF50;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        margin-top: 5%;
        cursor: pointer;'onclick='window.location.href=\"https://johnweiss1996.com\"'>Go back to homepage
        </button></div>";
        die();
    }
  
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $message = $_POST['message']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
  if(strlen($message) < 2) {
    $error_message .= 'The Message you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
<h1 id="thank-you-txt">Thank you for contacting us. We will be in touch with you very soon.</h1>
<a id="resume-btn-1" onmouseover="blackOut1(this)" onmouseout="normalImg1(this)" onclick="toHome()">HOME</a>

<script async src="JS/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php
}
?>

</body>
</html>