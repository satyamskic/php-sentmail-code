
<?php

$message = '';


if (isset($_POST["submit"])) {
    $skills = '';
    foreach ($_POST["skills"] as $row) {
        $skills .= $row . ', ';
    }
    $skills = substr($skills, 0, -2);
    $path = 'upload/' . $_FILES["resume"]["name"];
    move_uploaded_file($_FILES["resume"]["tmp_name"], $path);
    $message = '
		<h3 align="center">Applicant Details</h3>
		<table border="1" width="100%" cellpadding="5" cellspacing="5">
			<tr>
				<td width="30%">Name</td>
				<td width="70%">' . $_POST["name"] . '</td>
			</tr>
			<tr>
				<td width="30%">Address</td>
				<td width="70%">' . $_POST["address"] . '</td>
			</tr>
			<tr>
				<td width="30%">Email Address</td>
				<td width="70%">' . $_POST["email"] . '</td>
			</tr>
			<tr>
				<td width="30%">Area of Interest</td>
				<td width="70%">' . $skills . '</td>
			</tr>
			<tr>
				<td width="30%">Experience Year</td>
				<td width="70%">' . $_POST["experience"] . '</td>
			</tr>
			<tr>
				<td width="30%">Phone Number</td>
				<td width="70%">' . $_POST["mobile"] . '</td>
			</tr>
			<tr>
				<td width="30%">Additional Information</td>
				<td width="70%">' . $_POST["additional_information"] . '</td>
			</tr>
		</table>
	';

    require 'class/class.phpmailer.php';
    $mail = new PHPMailer;
    $mail->IsSMTP();                                //Sets Mailer to send message using SMTP


// ADD YOUR DETAILS HERE
$mail->Host = 'smtp.gmail.com';                    //Sets the SMTP hosts of your Email hosting, this for Godaddy
$mail->Port = '465';                                //Sets the default SMTP server port
$mail->SMTPAuth = true;                            //Sets SMTP authentication. Utilizes the Username and Password variables
$mail->Username = '19bcs086@gbu.ac.in';            //Sets SMTP username
$mail->Password = '';                    //Sets SMTP password
$mail->SMTPSecure = 'ssl';                            //Sets connection prefix. Options are "", "ssl" or "tls"
$mail->From = '19bcs086@gbu.ac.in';                    //Sets the From email address for the message
$mail->FromName = 'Satyam Kumar';                //Sets the From name of the message
$mail->AddAddress('joinmeprakhar@gmail.com', 'Satyam Kumar');        //Adds a "To" address
// ADD YOUR DETAILS HERE
    
    $mail->WordWrap = 50;                            //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);                            //Sets message type to HTML
    $mail->AddAttachment($path);                    //Adds an attachment from a path on the filesystem
    $mail->Subject = 'Application for JOB';                //Sets the Subject of the message
    $mail->Body = $message;                            //An HTML or plain text message body
    if ($mail->Send())                                //Send an Email. Return true on success or false on error
    {
        $message = '<div class="alert alert-success">Application Successfully Submitted</div>';
        unlink($path);
    } else {
        $message = '<div class="alert alert-danger">There is an Error</div>';
    }
}

?>