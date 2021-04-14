<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$namein = "Dennis";
$emailin = "test@pm.me";
$subjectin = "Hallo";
$messagein =  "Test message";
var_dump("eeefwe");
$mysqli =new mysqli("localhost","portifolio","","contact_persons");
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}else{
  var_dump("expression");
}
$mysqli->query("INSERT INTO Details (C_Name,Email,Subject,Message) VALUES('".$namein."', '".$emailin."','".$subjectin."','" .$messagein."')");

  /**
  * Requires the "PHP Email Form" library
  * 
  * I willadd soon

  INSERT INTO `Details` (`c_id`, `C_Name`, `Email`, `Subject`, `Message`, `Date`) VALUES ('1', 'Dennis Mwangangi', 'mwangangidennis@pm.me', 'Test01', 'Halloooo', '2021-04-14');

  

  $sql = "SELECT * FROM `Details`";
  * 
  */

 
  $receiving_email_address = 'mwangangidennis@pm.me';

  /**
  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  **/

  /*uncomment this first

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  //I'm yet to identify the best email service.
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  /*

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();

  */
?>
