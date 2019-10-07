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

    if(isset($_POST['readRecordproject'])) {

        $prfl=$_SESSION['profileid'];
        $sql = "SELECT * FROM project_details where profiles_id=$prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            echo'<div class="row data-fetch heads"><h3>Project:</h3></div>';
            while ($row = mysqli_fetch_array($result)) {
                $id=$row['id'];
                $project=$row['project_name'];
                $link= $row['link'];
                $start_pro=$row['start_date'];
                $end_pro=$row['end_date'];
                $description=$row['description'];
                $start=date('M Y',strtotime($start_pro));
                $end=date('M Y',strtotime($end_pro));

                echo '<div class="row data-fetch">
                        <div class="col col1"><h5 class="fetched-head">'; 
                            echo $project.'</h5>';

                            echo'<div>';
                                    echo $start."-".$end;         
                            echo '</div>';

                            echo '<div>';
                                    echo $link;   
                            echo'</div>';

                            echo'<div>';
                                    echo $description;         
                            echo '</div>';

                        echo '</div>';

                        echo '<div class="col col2 abc" style="display:none;">';
                            echo '<a href="#" onclick="DeleteRecordproject('.$id.')"><img class="rmv-img" src="img/bin-with-lid.png"></a>
                            </div>
                            </div>';
            }
        } 
    }

    if(isset($_POST['deleteidproject'])){

        $user_id = $_POST['deleteidproject']; 
        $deletequery = " delete from project_details where id ='$user_id' ";
        if (!mysqli_query($conn,$deletequery)) {
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo("deletion sucessful");
    }


    if(isset($_POST['project_name'])){

        $userid_loggedin=$_SESSION['profileid'];
        $project=$_POST['project_name'];
        $start_pro=$_POST['startdate_pro'];
        $end_pro=$_POST['enddate_pro'];
        $description_pro=$_POST['project_description'];
        $project_link=$_POST['project_link'];
        $start=date('Y/m/d',strtotime($start_pro));
        $end=date('Y/m/d',strtotime($end_pro));

        $sql = "INSERT INTO project_details (project_name ,start_date ,end_date ,description ,link ,profiles_id)
            VALUES('$project' ,'$start', '$end' ,'$description_pro' ,'$project_link' ,'$userid_loggedin')";
            
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo "Registration Successful";
    }
    exit;
    mysqli_close($conn);
?> 