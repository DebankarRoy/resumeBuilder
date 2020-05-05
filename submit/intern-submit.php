<?php
    session_start();
    include "conn.php";
    
    $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
    if(!$conn){
        die("connection failed : ".mysqli_connect_error());
    }

    if(isset($_POST['readRecordintern'])) {

        $prfl=$_SESSION['profileid'];
        $sql = "SELECT * FROM intern_details where profiles_id=$prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            echo'<div class="row data-fetch heads"><h3>Internship:</h3></div>';
            while ($row = mysqli_fetch_array($result)) {

                $id=$row['id'];
                $profile=$row['intern_profile'];
                $org = $row['organization'];
                $loc= $row['location'];
                $start_int=$row['start_date'];
                $end_int=$row['end_date'];
                $description=$row['description'];
                $start=date('M Y',strtotime($start_int));
                $end=date('M Y',strtotime($end_int));
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
                            echo '<a href="#" onclick="DeleteRecordintern('.$id.')"><img class="rmv-img" src="img/bin-with-lid.png"></a>
                            </div>
                            </div>';
            }
        } 
    }

    if(isset($_POST['deleteidintern'])){

        $user_id = $_POST['deleteidintern']; 
        echo $user_id;
        $deletequery = " delete from intern_details where id ='$user_id' ";
        if (!mysqli_query($conn,$deletequery)) {
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo("deletion sucessful");
    }

     if(isset($_POST['intern_profile']) && $_POST['intern_org'] && isset($_POST['intern_loc'])){
        $userid_loggedin=$_SESSION['profileid'];
        $intern_profile=$_POST['intern_profile'];
        $intern_org = $_POST['intern_org'];
        $intern_loc= $_POST['intern_loc'];
        $start_int=$_POST['startdate_int'];
        $end_int=$_POST['enddate_int'];
        $description_int=$_POST['intern_description'];
        $start_int=date('Y/m/d',strtotime($start_int));
        $end_int=date('Y/m/d',strtotime($end_int));

        $sql = "INSERT INTO intern_details(intern_profile ,organization ,location ,start_date ,end_date ,description ,profiles_id)
            VALUES('$intern_profile' ,'$intern_org' ,'$intern_loc' ,'$start_int', '$end_int' ,'$description_int' ,'$userid_loggedin')";
            
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo "Registration Successful";
    }
    exit;
    mysqli_close($conn);
?> 