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

        $sql = "SELECT * FROM job_details "; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {
                $id=$row['id'];
                $profile=$row['job_profile'];
                $org = $row['job_org'];
                $loc= $row['job_loc'];
                $start_job=$row['startdate_job'];
                $end_job=$row['enddate_job'];
                $description=$row['description'];
                
                echo '<div class="row data-fetch">
                        <div class="col col1"><h3>Jobs:</h3><h5 class="fetched-head">'; 
                                echo $profile.'</h5>';

                            echo '<div>';
                                    echo $org.'('.$loc.')';   
                            echo'</div>';

                            echo'<div>';
                                    echo $start_job."-".$end_job;         
                            echo '</div>';

                            echo'<div>';
                                    echo $description;         
                            echo '</div>';

                        echo '</div>';

                        echo '<div class="col col2">';
                            echo '<a href="#" onclick="DeleteRecordjob('.$id.')"><img class="rmv-img" src="img/bin-with-lid.png"></a>
                            </div>
                            </div>';
            }
        } 
    }


    if(isset($_POST['job_profile']) && $_POST['job_org'] && isset($_POST['job_loc']) && isset($_POST['startdate_job']) && isset($_POST['enddate_job']) && isset($_POST['job_description']))
        {

        $job_profile=$_POST['job_profile'];
        $job_org = $_POST['job_org'];
        $job_loc= $_POST['job_loc'];
        $start_job=$_POST['startdate_job'];
        $end_job=$_POST['enddate_job'];
        $description_job=$_POST['job_description'];
        

        $sql = "INSERT INTO job_details(job_profile ,organization ,location ,start_date ,end_date ,description)
            VALUES('$job_profile' ,'$job_org' ,'$job_loc' ,'$start_job', '$end_job' ,'$description_job')";
            
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo "Registration Successful";
    }
    exit;
    mysqli_close($conn);
?> 