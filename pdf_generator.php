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

        $sql = "SELECT * FROM graduation where profiles_id = $prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {
                $id=$row['id'];
                $deg= $row['degree'];
                $str= $row['stream'];
                $str_yr= $row['start_year'];
                $end_yr= $row['end_year'];
                $clg= $row['college'];
                $prf_scl= $row['performence_scale'];
                $prf_mrk= $row['performence_marks'];
            }
        }

        $sql = "SELECT * FROM senior_secondary where profiles_id=$prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {

                $id=$row['id'];
                $str_ss= $row['stream'];
                $end_yr_ss= $row['end_year'];
                $scl_ss= $row['school'];
                $board_ss= $row['board'];
                $prf_scl_ss= $row['performence_scale'];
                $prf_mrk_ss= $row['performence_marks'];
            }
        }

         $sql = "SELECT * FROM secondary where profiles_id=$prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {
                $id=$row['id'];
                $end_yr_s= $row['end_year'];
                $scl_s= $row['school'];
                $board_s= $row['board'];
                $prf_scl_s= $row['performence_scale'];
                $prf_mrk_s= $row['performence_marks'];
            }
        }

        $prfl=$_SESSION['profileid'];
        $sql = "SELECT * FROM job_details where profiles_id=$prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            
            while ($row = mysqli_fetch_array($result)) {
                $id=$row['id'];
                $profile=$row['job_profile'];
                $org = $row['organization'];
                $loc= $row['location'];
                $start_job=$row['start_date'];
                $end_job=$row['end_date'];
                $description=$row['description'];
                $start=date('M Y',strtotime($start_job));
                $end=date('M Y',strtotime($end_job));
            }
        }

        $sql = "SELECT * FROM intern_details where profiles_id=$prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_array($result)) {

                $id=$row['id'];
                $profile_i=$row['intern_profile'];
                $org_i= $row['organization'];
                $loc_i= $row['location'];
                $start_int=$row['start_date'];
                $end_int=$row['end_date'];
                $description_i=$row['description'];
                $start_i=date('M Y',strtotime($start_int));
                $end_i=date('M Y',strtotime($end_int));
            }
        }

        $sql = "SELECT * FROM training_details where profiles_id=$prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_array($result)) {
                $id=$row['id'];
                $program_t=$row['program_name'];
                $org_t = $row['organization'];
                $loc_t= $row['location'];
                $start_pro=$row['start_date'];
                $end_pro=$row['end_date'];
                $description_t=$row['description'];
                $start_t=date('M Y',strtotime($start_pro));
                $end_t=date('M Y',strtotime($end_pro));
        	}
    	}

    	$sql = "SELECT * FROM project_details where profiles_id=$prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_array($result)) {
                $id=$row['id'];
                $project=$row['project_name'];
                $link= $row['link'];
                $start_pro=$row['start_date'];
                $end_pro=$row['end_date'];
                $description=$row['description'];
                $start_p=date('M Y',strtotime($start_pro));
                $end_p=date('M Y',strtotime($end_pro));
            }
        }

        $sql = "SELECT * FROM other_details where profiles_id=$prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_array($result)) {
                $id=$row['id'];
                $profile_oth=$row['description'];
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

			*{
			    box-sizing : border-box;
			    font-family: "Open Sans";
			}

			.row::after {
			    content: "";
			    display: block;
			    clear: both;
			}

			.row{
			    width: 100%;
			    height: auto;
			    margin-right: 0px; 
			    margin-left: 0px;
			    display: block; 
			    border-top-left-radius: 5px;
			    border-top-right-radius: 5px;
			    border: solid 1px black;
			}
			.col{
				height:auto;
			    float: left;
			    //border: solid 1px green;

			}

			.dp-col{
				width:20%;
			}
			.col1{
				width:80%;
			}
			.title{
				width:40%;
			}
			.activity{
				width:55%;
			}
			.phd{
				
			}
			.post-grad{
				
			}
			.grad{
				
			}
			.page_break { page-break-before: always; }

		   </style>
			<div class="row">
                    <div class="col col1">
                        <h2>'.$name.'</h2>
                        <span class="grey">'.$email.'<br></span>
                        <span class="grey">'.$phone.'<br></span>
                        <span class="grey">'.$place.'</span>
                    </div>
                    <div class="col dp-col">
                        <img class="dp" src='.$image.'style="height:50px;width:50px;">
                    </div>
            </div>
            <div class="row education">
            	<div class="col title">
            		<h3>Education</h3>
            	</div>
            	<div class="col activity">
	            	<div class="row phd">
            			<h5 class="fetched-head"> 
                       PhD,'.$str_phd.'
                        ('.$str_yr_phd.'-'.$end_yr_phd.')
                        </h5>
                    	<div>
	                        '.$clg_phd.'   
	                    </div>
						<div>
	                         SGPA: '.$prf_scl_phd.'/'.
	                        $prf_mrk_phd.'         
	                    </div>
                	</div><br>

                	<div class=" row post-grad">
            			<h5 class="fetched-head"> 
                       '.$deg_pg.','.$str_pg.'
                        ('.$str_yr_pg.'-'.$end_yr_pg.')
                        </h5>
                    	<div>
	                        '.$clg_pg.'   
	                    </div>
						<div>
	                         SGPA: '.$prf_scl_pg.'/'.
	                        $prf_mrk_pg.'         
	                    </div>
                	</div>

                	<div class=" row grad">
            			<h5 class="fetched-head"> 
                       '.$deg.','.$str.'
                        ('.$str_yr.'-'.$end_yr.')
                        </h5>
                    	<div>
	                        '.$clg.'   
	                    </div>
						<div>
	                         SGPA: '.$prf_scl.'/'.
	                        $prf_mrk.'         
	                    </div>
                	</div>

                	<div class=" row ss">
            			<h5 class="fetched-head"> 
                        XII (Senior Secondary)<br></h5>
                            Year of Completion:'.$end_yr_ss.'
                    	<div>
	                        '.$board_ss.'Board('.$scl_ss.')   
	                    </div>
						<div>
	                         SGPA:'.$prf_scl_ss.'/'.$prf_mrk_ss.'        
	                    </div>
                	</div>

                	<div class=" row s">
            			<h5 class="fetched-head"> 
                        X (Secondary),'.$str_s.'<br></h5>
                            Year of Completion:'.$end_yr_s.'
                    	<div>
	                        '.$board_s.'Board('.$scl_s.')   
	                    </div>
						<div>
	                         SGPA:'.$prf_scl_s.'/'.$prf_mrk_s.'        
	                    </div>
                	</div>
            	</div>
            </div>
            <div class="page_break">
            </div>
            <div class="row experience">
            	<div class="col title">
            		<h3>Experiences</h3>
            	</div>
            	<div class="col activity">
            		<div class="row job">
            			<h3>Job:</h3>
            			<h5 class="fetched-head">'
                            .$profile.
                        '</h5>
                        <div>
                        	'.$org.'('.$loc.')   
                        </div>
                        <div>
                        	'.$start.'-'.$end.'         
                        </div>
                        <div>
                            '.$description.'       
                        </div>
            		</div>
            		<br><br><br><br>
            		<div class="row intern">

            			<h3>Internship:</h3>
            			<h5 class="fetched-head">'
                            .$profile_i.
                        '</h5>
                        <div>
                        	'.$org_i.'('.$loc_i.')   
                        </div>
                        <div>
                        	'.$start_i.'-'.$end_i.'         
                        </div>
                        <div>
                            '.$description_i.'       
                        </div>
            		</div>

            		<div class="row training">

            			<h3>Training:</h3>
            			<h5 class="fetched-head">'
                            .$profile_t.
                        '</h5>
                        <div>
                        	'.$org_t.'('.$loc_t.')   
                        </div>
                        <div>
                        	'.$start_t.'-'.$end_t.'         
                        </div>
                        <div>
                            '.$description_t.'       
                        </div>
            		</div>

            		<div class="row project">

            			<h3>Project:</h3>
            			<h5 class="fetched-head">'
                            .$project.
                        '</h5>
                        <div>
                        	'.$start_t.'-'.$end_t.'         
                        </div>
                         <div>
                        	<a href="'.$link.'">'.$link.'</a>  
                        </div>
                        <div>
                            '.$description_t.'       
                        </div>
            		</div>

            		<div class="row project">

            			<h3>Others:</h3>
            			<h5 class="fetched-head">
                            <li>'.$profile_oth.'</li>
                        </h5>
            		</div>
            	</div>
            </div>
            <div class="page_break">
            </div>
            <div class="row skill">
            	<div class="col title">
            		<h3>Skill</h3>
            	</div>
            	<div class="col activity">
            	</div>
            </div>
            ';

	$dompdf->loadHtml($html);

	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'landscape');

	// Render the HTML as PDF
	$dompdf->render();

	// Output the generated PDF to Browser
	$dompdf->stream($file,array("Attachment"=>0));

?>
