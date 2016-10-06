<?php 
session_start();

//Array to store validation errors
$errmsg_arr = array();


//Validation error flag
$errflag = false;


//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
$str = @trim($str);
if(get_magic_quotes_gpc()) {
$str = stripslashes($str);
}
return mysql_real_escape_string($str);
}



//Sanitize the POST values
$name = clean($_POST['name']);
$email = clean($_POST['email']);
$phone = clean($_POST['phone']);
$org = clean($_POST['org']);
$message = nl2br(clean($_POST['message']));
$Detailed_message=str_replace('<br />', " ", $message);






//Mail to Spoc
/*$mailspoc = '<p><b>Hi '.$cperson.'</b>,</p><p>Your Company is registered on <b>Disclose Without Fear!</b></p><p>Please add you company details and Other Spoc details using below link to create the company url</p><p><a href="'.$mainurl.'company/add-company-details.php?leadid='.$lead_id.'" target="_blank" style="color:#4E9258;">'.$mainurl.'company/add-company-details.php?leadid='.$lead_id.'</a></p><p><b>Contract Period:</b></p><p><b>Active From:</b> '.$activefrom.'<br><b>Till From:</b> '.$activetill.'</p><p><b>CAM Detail:</b></p><p><b>Name:</b> '.$row2["name"].'<br><b>Email:</b> '.$row2["email"].'<br><b>Telephone:</b> '.$row2["tel_no"].'</p><p><b>Support Detail:</b></p><p><b>Name:</b> '.$row3["name"].'<br><b>Email:</b> '.$row3["email"].'<br><b>Telephone:</b> '.$row3["tel_no"].'</p><p><br><br>Best Regards<br>Soumitra Das<br>Managing Partner</p>';
$to = $email;
$subject = "Company Registration Details From Disclose without Fear!";
$mail_body = '<html>
<body>' . $mailspoc . ' 
</body>
</html>';
$headers = "From: $mainemail \r\n";
$headers .= "Reply-To: $mainemail \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$sendmail= mail($to, $subject, $mail_body, $headers);*/


//Mail to CAM
$mailspoc = $Detailed_message;
$to = 'khotvijayn@gmail.com';
$subject = "Enquiry";
/*$headers = "From: $mainemail \r\n";
$headers .= "Reply-To: $mainemail \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";*/

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: $email" . "\r\n" .
"Reply-To: $email" . "\r\n" .
"X-Mailer: PHP/" . phpversion();





$sendmail= mail($to, $subject, $mailspoc, $headers);



//Mailto TS

/*$headers = "From: $mainemail \r\n";
$headers .= "Reply-To: $mainemail \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";*/




if($sendmail) {
$_SESSION['COMLEADMSG'] = 1;

session_write_close();
header("location: contact_us.php");
exit();
}else {
die("Query failed");
}
?>

