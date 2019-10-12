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
	$obj_pdf->Image($image, '150', '12', '30', '35');
	
	$html ='<style>'. file_get_contents('css/home-2.css').'</style>';

	$content = '';
	$content .= '<div>
					<h3>'.$name.'</h3>
					<span >'.$email.'<br></span>
					<span >'.$phone.'<br></span>
					<span class="grey resume-content">'.$place.'</span>
				</div>';
	$obj_pdf->writeHTML($content);
	 

	$left_column = <<<EOF
	<!---- Education Table ---->
	<div class="row education-table">
		<div class="col details-left"><h2>Education</h2></div>
		<div class="col details-right">	
EOF;

$obj_pdf->SetFillColor(215, 235, 255);
$obj_pdf->SetTextColor(94, 185, 242);
$obj_pdf->writeHTMLCell(80, '', '', '', $left_column, 0, 0, 0, true, 'J', true);

$sql = "SELECT * FROM phd where profiles_id=$prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {
				$id=$row['id'];    
	            $str_phd= $row['stream'];
	            $str_yr_phd=$row['start_year'];
	            $end_yr_phd= $row['end_year'];
	            $clg_phd= $row['college'];
	            $prf_scl_phd= $row['performence_scale'];
	            $prf_mrk_phd= $row['performence_marks'];
            }
        }
$sql = "SELECT * FROM post_graduation where profiles_id=$prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {
                $id=$row['id'];
                $str_pg= $row['stream'];
                $deg_pg=$row['degree'];
                $str_yr_pg=$row['start_year'];
                $end_yr_pg= $row['end_year'];
                $clg_pg= $row['college'];
                $prf_scl_pg= $row['performence_scale'];
                $prf_mrk_pg= $row['performence_marks'];
            }
        }

$right_column = <<<EOF
		<div class="row data-fetch resume-content" >
            <div class="col col1"><h5 class="fetched-head"> 
                PhD, $str_phd
                ($str_yr_phd-$end_yr_phd)
                </h5>

                <div>
                         $clg_phd   
                </div>

                <div>
                        SGPA: $prf_scl_phd/
                        $prf_mrk_phd          
                </div>
            </div>
        </div>
		</div>
		<div>
EOF;

	$obj_pdf->SetFillColor(215, 235, 255);
	$obj_pdf->SetTextColor(40, 37, 41);
	$obj_pdf->writeHTMLCell(80, '', '', '', $right_column, 0, 1, 0, true, 'J', false);
	//$html->SetXY(10,10);
	
	// output the HTML content
	$obj_pdf->writeHTML($html, true, false, true, false, '');
	$obj_pdf->Output();
		

?>
$html .= <<<EOF

EOF;