<?php
	
	session_start();

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $flag=1;
        $userid_loggedin=$_SESSION['id'];
        $user_loggedin=$_SESSION['name'];
       

		if(isset($_POST['activeprofileid'])) {
			$_SESSION['profileid']=$_POST['activeprofileid'];
		}       
    }
    else
    {
    	$flag=0;
    	header('Location:/Resume/login.php');
	}


	$hostname = "127.0.0.1";
	$username = "root";
	$db_password = "ralphubuntu";
	$db_name = "resume";
	$conn = mysqli_connect($hostname, $username, $db_password, $db_name);
	if(!$conn){
	die("connection failed : ".mysqli_connect_error());
	}

	$userid_loggedin=$_SESSION['id'];
	$prfl=$_SESSION['profileid'];
	$sql = "SELECT * FROM profiles where user_id=$userid_loggedin and id=$prfl";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_array($result)) {
		$id=$row['id'];
		$profileid=$id;
		$name= $row['name'];
		$email= $row['email_student'];
		$phone= $row['phone_number'];
		$place= $row['city'];
		$image= $row['image'];
		}	
	}
	

	require_once('dompdf/autoload.inc.php');
	require_once 'dompdf/lib/html5lib/Parser.php';
	require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
	require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
	require_once 'dompdf/src/Autoloader.php';
	Dompdf\Autoloader::register();

	use Dompdf\Dompdf;

	$dompdf = new Dompdf();
	$file='example';
	//$html = file_get_contents("pdfResume.php"); 
	$html='<style>
			.grey{
				position:relative;
				left:200px;

			}
		   </style>
	<div class="row">
                    <div class="col dp-col">
                        <img class="dp" src='.$image.'style="height:50px;width:50px;">
                    </div>
                    <div class="col col1">
                        <h2>'.$name.'</h2>
                        <span class="grey">'.$email.'<br></span>
                        <span class="grey">'.$phone.'<br></span>
                        <span class="grey">'.$place.'</span>
                    </div>
            </div>';

	$dompdf->loadHtml($html);

	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'landscape');

	// Render the HTML as PDF
	$dompdf->render();

	// Output the generated PDF to Browser
	$dompdf->stream($file,array("Attachment"=>0));

?>
