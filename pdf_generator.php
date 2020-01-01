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

        $sql = "SELECT COUNT(*) as total FROM skills where profiles_id=6"; 
        $result = mysqli_query($conn,$sql);
         if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_array($result)) {
                $skill_counter= $row[total];
            }
        }

        $sql = "SELECT * FROM skills where profiles_id=$prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {

                $id=$row['id'];
                $skill= $row['skill'];
                $rating= $row['rating'];
            }
        }

        $sql = "SELECT * FROM blog where profiles_id=$prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {

                $id=$row['id'];
                $blog=$row['blog'];
            }	
        }

        $sql = "SELECT * FROM github where profiles_id=$prfl"; 
        $result = mysqli_query($conn,$sql);


        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {

                $id=$row['id'];
                $github = $row['github'];
            }
        }

        $sql = "SELECT * FROM playstore where profiles_id=$prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {

                $id=$row['id'];
                $playstore=$row['playstore'];
            }
        }

        $sql = "SELECT * FROM behance where profiles_id=$prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {

                $id=$row['id'];
                $behance=$row['behance'];
            }
        } 
	
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
			.col::after {
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
			    //border: solid 1px black;
			}
			.col{
				height:auto;
			    float: left;
			    //border: solid 1px green;

			}

			.border-top{
				border-top:1px solid #E6E6E6;
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
			.title{
				color:#0A9FD9;
			}
			.clr{
				color:#8594B2;
			}
			.fetched-head{
				color:#39353A;
				font-size:14px;

			}
			.name{
				color:#333;
			}
			.grey{
				color:#39353A;
			}
			.page_break { page-break-after: always; }
			
		   </style>';

		$html.=	'
				<div class="row profile border-btm">
                    <div class="col col1">
                        <h2 class="name">'.$name.'</h2>
                        <span class="grey">'.$email.'<br></span>
                        <span class="grey">'.$phone.'<br></span>
                        <span class="grey">'.$place.'</span>
                    </div>
                    <div class="col dp-col">
                        <img class="dp" style="height:100px;width:100px;margin-top:10px;">
                    </div>
            </div>
            <br>
            <div class="row education border-top">
            	<div class="col title">
            		<h3>Education</h3>
            	</div>
            	<div class="col activity">';
	            	if($clg_phd!="")
	            	{
	            		$html.='<div class="row phd">
	            			<h5 class="fetched-head"> 
	                       PhD,'.$str_phd.'
	                        ('.$str_yr_phd.'-'.$end_yr_phd.')
	                        </h5>
	                    	<div class="clr">
		                        '.$clg_phd.'   
		                    </div>
							<div class="clr">
		                         SGPA: '.$prf_scl_phd.'/'.
		                        $prf_mrk_phd.'         
		                    </div>
	                	</div>';
	                }

                	if($clg_pg!="")
                	{
	            		$html.='<div class=" row post-grad">
	            			<h5 class="fetched-head"> 
	                       '.$deg_pg.','.$str_pg.'
	                        ('.$str_yr_pg.'-'.$end_yr_pg.')
	                        </h5>
	                    	<div class="clr">
		                        '.$clg_pg.'   
		                    </div>
							<div class="clr">
		                         SGPA: '.$prf_scl_pg.'/'.
		                        $prf_mrk_pg.'         
		                    </div>
	                	</div>';
               		}

                	if($clg!="")
                	{
                		$html.='<div class=" row grad">
	            			<h5 class="fetched-head"> 
	                       '.$deg.','.$str.'
	                        ('.$str_yr.'-'.$end_yr.')
	                        </h5>
	                    	<div class="clr">
		                        '.$clg.'   
		                    </div>
							<div class="clr">
		                         SGPA: '.$prf_scl.'/'.
		                        $prf_mrk.'         
		                    </div>
	                	</div>';
	                }

                	if($scl_ss!=""){
                		$html.='<div class=" row ss">
	            			<h5 class="fetched-head"> 
	                        XII (Senior Secondary)<br></h5>
	                        <div class="clr">    Year of Completion:'.$end_yr_ss.'</div>
	                    	<div class="clr">
		                        '.$board_ss.' Board('.$scl_ss.')   
		                    </div>
							<div class="clr">
		                         SGPA:'.$prf_scl_ss.'/'.$prf_mrk_ss.'        
		                    </div>
	                	</div>';
	                }

                	if($scl_ss!=""){
                		$html.='<div class=" row s">
	            			<h5 class="fetched-head"> 
	                        X (Secondary),'.$str_s.'<br></h5>
	                        <div class="clr">    Year of Completion:'.$end_yr_s.'</div>
	                    	<div class="clr">
		                        '.$board_s.' Board('.$scl_s.')   
		                    </div>
							<div class="clr">
		                         SGPA:'.$prf_scl_s.'/'.$prf_mrk_s.'        
		                    </div>
	                	</div>';
	                }
            	$html.='</div>
            </div>
            <br>';
            if($profile!="" || $profile_i!="" || $profile_t!="" || $project!="" || $others!="")
            {
        	$html.='<div class="row experience border-top">
                    	<div class="col title">
                    		<h3>Experiences</h3>
                    	</div>
                    	
                    		<div class="col activity">';
                    		if($profile!='')
                    		{
                    		$html.='<div class="row job">
                    			<h3>Job:</h3>
                    			<h5 class="fetched-head">'
                                    .$profile.
                                '</h5>
                                <div class="clr">
                                	'.$org.'('.$loc.')   
                                </div>';
                                if($start!="" && $end!=""){
                                	$html.='<div class="clr">
                                    	'.$start.'-'.$end.'         
                                    </div>';
                                }
                                if($description!="")
                            	{
                            		$html.='<div class="clr">
                                    '.$description.'       
                                	</div>';
                            	}
                    		$html.='</div>';
                			}
                			if($profile_i!="")
                			{
            				$html.='
	                    		<div class="row intern">
	        					
	                    			<h3>Internship:</h3>
	                    			<h5 class="fetched-head">'
	                                    .$profile_i.
	                                '</h5>
	                                <div class="clr">
	                                	'.$org_i.'('.$loc_i.')   
	                                </div>';
	                                if($start!="" && $end!=""){
                                	$html.='<div class="clr">
                                    	'.$start_i.'-'.$end_i.'         
                                    </div>';
                                }
                                if($description!="")
                            	{
                            		$html.='<div class="clr">
                                    '.$description_i.'       
                                	</div>';
                            	}
	                    		$html.='</div>';
	                    	}
        					if($profile_t!="")	
                    		{
                    			$html.='<div class="row training">
                    		        
	                    			<h3>Training:</h3>
	                    			<h5 class="fetched-head">'
	                                    .$profile_t.
	                                '</h5>
	                                <div class="clr">
	                                	'.$org_t.'('.$loc_t.')   
	                                </div>
	                                <div class="clr">
	                                	'.$start_t.'-'.$end_t.'         
	                                </div>';
	                                if($description_t!="")
                            	{
                            		$html.='<div class="clr">
                                    '.$description_t.'       
                                	</div>';
                            	}
	                    		$html.='</div>';
	                    	}
    						if($project!="")
                    		{
                    			$html.='<div class="row project">
                    		        
	                    			<h3>Project:</h3>
	                    			<h5 class="fetched-head">'
	                                    .$project.
	                                '</h5>
	                                <div class="clr">
	                                	'.$start_p.'-'.$end_p.'         
	                                </div>';
	                                if($link!="")
                                 	{'<div class="clr">
 	                                	<a href="'.$link.'">'.$link.'</a>  
                           	     		</div>';
     	                           	}
	                                if($description_t!="")
                            	{
                            		$html.='<div class="clr">
                                    '.$description_t.'       
                                	</div>';
                            	}
                    			$html.='</div>';
                    		}
                    		if($profile_oth!="")
                    		{
                			$html.='<div class="row others">
                		
        		            			<h3>Others:</h3>
        		            			<h5 class="fetched-head">
        		                            <li class="clr">'.$profile_oth.'</li>
        		                        </h5>
        		            		</div>';
        	            	}
                    	$html.='</div>
                    </div>
                    <br>';
            }
        $html.=
            '<div class="row skill border-top">
            	<div class="col title">
            		<h3>Skill</h3>
            	</div>
            	<div class="col activity">';
            	$sql = "SELECT * FROM skills where profiles_id=$prfl"; 
        		$result = mysqli_query($conn,$sql);
            	if(mysqli_num_rows($result) > 0){

            		while ($row = mysqli_fetch_array($result)) {

	                $id=$row['id'];
	                $skill= $row['skill'];
	                $rating= $row['rating'];
            	
            		$html.='<div class="row skills">
		            			
		            			<h4 class="fetched-head">'
		                            .$skill.
		                        '</h4>
		                        <div class="clr">
		                        	'.$rating.'   
		                        </div>
		            		</div>';
            		}
        		}
            	$html.='</div>
            </div>
            ';
            if($blog!="" || $github!="" || $playstore!="" || $behance!="" || $other!="")
            {
            	$html.=
                        '<div class="row work_samples border-top">
                        	<div class="col title">
                        		<h3>Work Samples</h3>
                        	</div>
                        	<div class="col activity">';
                        		if($blog!='')
                        		{
                    			$html.='<div class=row blog>
                        			<h5 class="fetched-head">Blog Link</h5>
                                    <div>
                                    	'.$blog.'   
                                    </div>
                                </div>';
            	                }
                                if($github!='')
                                {
                                $html.='<div class=row github>
                        			<h5 class="fetched-head">Github Link</h5>
                                    <div>
                                    	'.$github.'   
                                    </div>
                            	</div>';
                            	}
                            	if($playstore!='')
                                {
                                $html.='<div class=row playstore>
                        			<h5 class="fetched-head">Playstore Link</h5>
                                    <div>
                                    	'.$playstore.'   
                                    </div>
                            	</div>';
                            	}
                            	if($behance!='')
                                {
                                $html.='<div class=row behance>
                        			<h5 class="fetched-head">Behance Portfolio Link</h5>
                                    <div>
                                    	'.$behance.'   
                                    </div>
                            	</div>';
                            	}
                            	if($other!='')
                                {
                                $html.='<div class=row playstore>
                        			<h5 class="fetched-head">Other Link</h5>
                                    <div>
                                    	'.$other.'   
                                    </div>
                            	</div>';
                            	}
               					     		
              	          	$html.='
              	          	</div>
                        </div>
                        
                        ';
            }
                        


	include 'mpdf/vendor/autoload.php';

	$mpdf = new \Mpdf\Mpdf();
	$mpdf->WriteHTML($html);
	$mpdf->Output();
	 
?>
