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

    if(isset($_POST['readRecordjob'])) {

        $prfl=$_SESSION['profileid'];
        $sql = "SELECT * FROM job_details where profiles_id=$prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            echo'<div class="row data-fetch heads"><h3>Job:</h3></div>';
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
                if($end =="Jan 1970")
                {
                    $end='ongoing';
                }

                echo '<div class="row data-fetch">
                        <div class="col col1"><h5 class="fetched-head">'; 
                                echo $profile.'</h5>';

                            echo '<div>';
                                    echo $org.'('.$loc.')';   
                            echo'</div>';

                            echo'<div>';
                                    echo $start."-".$end;         
                            echo '</div>';

                            echo'<div>';
                                    echo $description;         
                            echo '</div>';

                        echo '</div>';

                        echo '<div class="col col2 abc" style="display:none;">';
                            echo '<a href="#" onclick="DeleteRecordjob('.$id.')"><img class="rmv-img" src="img/bin-with-lid.png"></a>
                            </div>
                            </div>';
            }
        } 
    }

    if(isset($_POST['deleteidjob'])){

        $user_id = $_POST['deleteidjob']; 
        $deletequery = " delete from job_details where id ='$user_id' ";
        if (!mysqli_query($conn,$deletequery)) {
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo("deletion sucessful");
    }


    if(isset($_POST['job_profile'])  && isset($_POST['job_loc']) && isset($_POST['startdate_job']) && isset($_POST['enddate_job']) && isset($_POST['job_description'])){

        $userid_loggedin=$_SESSION['profileid'];
        $job_profile=$_POST['job_profile'];
        $job_org = $_POST['job_org'];
        $job_loc= $_POST['job_loc'];
        $start_job=$_POST['startdate_job'];
        $end_job=$_POST['enddate_job'];
        $description_job=$_POST['job_description'];
        $start_job=date('Y/m/d',strtotime($start_job));
        $end_job=date('Y/m/d',strtotime($end_job));

        $sql = "INSERT INTO job_details(job_profile ,organization ,location ,start_date ,end_date ,description ,profiles_id)
            VALUES('$job_profile' ,'$job_org' ,'$job_loc' ,'$start_job', '$end_job' ,'$description_job', '$userid_loggedin')";
            
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo "Registration Successful";
    }
    exit;
    mysqli_close($conn);
?> 