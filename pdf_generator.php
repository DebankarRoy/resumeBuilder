<?php
	
	session_start();
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
		require_once('TCPDF/tcpdf.php');
	$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$obj_pdf->SetCreator(PDF_CREATOR);
	$obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");
	$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
	$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
	$obj_pdf->SetDefaultMonospacedFont('helvetica');
	$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
	$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
	$obj_pdf->setPrintHeader(false);
	$obj_pdf->setPrintFooter(false);
	$obj_pdf->SetAutoPageBreak(TRUE, 10);
	$obj_pdf->SetFont('helvetica', '', 12);
	$obj_pdf->AddPage();

	//$pdf->Image('MyImage.jpg', $x, $y, $width, $height);
	$obj_pdf->Image($image, '150', '15', '30', '35');
	
	//$html = file_get_contents('pdf.php');

	$html = <<<EOF
	<!-- EXAMPLE OF CSS STYLE -->
	<style>
		.resume-content{
    width: 80%;
    background-color: white;
    border: 2px solid #F8B750;
    //border-radius: 5px;
    margin-bottom: 50px;
    //margin-top: 40px;
	}
	</style>
	EOF;

	$content = '';
	$content .=  '<div>
		<h3>'.$name.'</h3>
		<span >'.$email.'<br></span>
		<span >'.$phone.'<br></span>
		<span class="grey resume-content">'.$place.'</span>
	</div>
	<div>
	<div>';
	//$content .= fetch_data();
	$content .= '';
	$obj_pdf->writeHTML($content);
	 
	
	
	// output the HTML content
	$obj_pdf->writeHTML($html, true, false, true, false, '');
	$obj_pdf->Output();
		
		//echo '<img style="height:60px;width:60px" src='.$image.'>';
?>