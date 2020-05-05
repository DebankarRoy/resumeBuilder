<?php
	
	//Include required PHPMailer files
			require 'mail/includes/PHPMailer.php';
			require 'mail/includes/SMTP.php';
			require 'mail/includes/Exception.php';
		//Define name spaces
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\SMTP;
			use PHPMailer\PHPMailer\Exception;
	
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
            $token = $row['token'];
        }  

		$msg = "Hello,$name\n\nClick on this link to reset your password\n\nhttp://localhost/Resume/setpassword.php?token=$token";
	

		
		//Create instance of PHPMailer
			$mail = new PHPMailer();
			$mail->SMTPDebug = 2;
		//Set mailer to use smtp
			$mail->isSMTP();
		//Define smtp host
			$mail->Host = "smtp.gmail.com";
		//Enable smtp authentication
			$mail->SMTPAuth = true;
		//Set smtp encryption type (ssl/tls)
			$mail->SMTPSecure = "tls";
		//Port to connect smtp
			$mail->Port = "587";
		//Set gmail username
			$mail->Username = "helpresume63@gmail.com";
		//Set gmail password
			$mail->Password = "resumer$147@Ralph";
		//Email subject
			$mail->Subject = "Password Reset";
		//Set sender email
			$mail->setFrom('helpresume63@gmail.com');
		//Enable HTML
			//$mail->isHTML(true);
		//Attachment
			//$mail->addAttachment('img/attachment.png');
		//Email body
			$mail->Body = $msg;
		//Add recipient
			$mail->addAddress($email);
		//Finally send email
			if ( $mail->send() ) {
				echo "Email Sent..!";
			}else{
				echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};
			}
		//Closing smtp connection
			$mail->smtpClose();
		}
		?>
		<script>
			alert("Check your email");
			location.replace("login.php");
		</script>
		<?php
		//header('Location:/Resume/login.php');

?>