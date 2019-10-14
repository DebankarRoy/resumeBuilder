<?php
	
	$hostname = "127.0.0.1";
	$username = "root";
	$db_password = "ralphubuntu";
	$db_name = "resume";
    
	$conn = mysqli_connect($hostname, $username, $db_password, $db_name);
	if(!$conn){
	die("connection failed : ".mysqli_connect_error());
	}

	if (isset($_GET['email'])) {

		$email=$_GET['email'];
		$sql = "SELECT * FROM users WHERE email='$email'";

		$result = mysqli_query($conn, $sql);
		while ($row=mysqli_fetch_array($result)) {
			$name=$row['name'];
            $password = $row['password'];
        }  

		$msg = "Hello ".$name."\n\nYour password is ".$password;

		require_once('PhpMail/mailerClass/PHPMailerAutoload.php');

		/*use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;*/

		/*require 'PHPMailer/src/Exception.php';
		require 'PHPMailer/src/PHPMailer.php';
		require 'PHPMailer/src/SMTP.php';*/


		$mail = new PHPMailer();

		try {
		    //Server settings
		    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
		    $mail->isSMTP();                                            // Send using SMTP
		    $mail->Host= 'tls://smtp.gmail.com:587';                    // Set the SMTP server to send through
		    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		    $mail->Username   = 'resumerhelp@gmail.com';               // SMTP username
		    $mail->Password   = 'resumer$147@Ralph';                	 // SMTP password
		    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
		    $mail->Port       = 587;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom('no-reply@resumerhelp.com');
		    $mail->addAddress($email);     // Add a recipient
		    /*$mail->addAddress('ellen@example.com');               // Name is optional
		    $mail->addReplyTo('info@example.com', 'Information');
		    $mail->addCC('cc@example.com');
		    $mail->addBCC('bcc@example.com');*/

		    // Attachments
		    /*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');*/    // Optional name

		    // Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Here is the subject';
		    $mail->Body    = $msg;
		    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		    if(!$mail->send()) {
			   echo 'Message could not be sent.';
			   echo 'Mailer Error: ' . $mail->ErrorInfo;
			   exit;
			}
			else{
				echo 'sent';
			}
		} catch (Exception $e) {
		    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}

		header('Location: login.php');
	}

		
	
?>