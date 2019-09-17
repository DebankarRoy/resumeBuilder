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
   

    if(isset($_POST['readRecordtraining'])) {

        /*echo"jbkgkjblljj";
        $prfl=$_SESSION['profileid'];
        echo $prfl;
        $abc=$_SESSION['userid'];
        echo $abc;*/

        $sql = "SELECT * FROM training_details "; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            echo'<div class="row data-fetch heads"><h3>Training:</h3></div>';
            while ($row = mysqli_fetch_array($result)) {
                $id=$row['id'];
                $program=$row['program_name'];
                $org = $row['organization'];
                $loc= $row['location'];
                $start_pro=$row['start_date'];
                $end_pro=$row['end_date'];
                $description=$row['description'];
                $start=date('M Y',strtotime($start_pro));
                $end=date('M Y',strtotime($end_pro));

                echo '<div class="row data-fetch">
                        <div class="col col1"><h5 class="fetched-head">'; 
                                echo $program.'</h5>';

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

                        echo '<div class="col col2">';
                            echo '<a href="#" onclick="DeleteRecordtraining('.$id.')"><img class="rmv-img" src="img/bin-with-lid.png"></a>
                            </div>
                            </div>';
            }
        } 
    }

    if(isset($_POST['deleteidtraining'])){

        $user_id = $_POST['deleteidtraining']; 
        $deletequery = " delete from training_details where id ='$user_id' ";
        if (!mysqli_query($conn,$deletequery)) {
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo("deletion sucessful");
    }


    if(isset($_POST['training_loc']) && isset($_POST['training_prog'])){
        $userid_loggedin=$_SESSION['userid'];

        $training_prog=$_POST['training_prog'];
        $training_org = $_POST['training_org'];
        $training_loc= $_POST['training_loc'];
        $start_year_tra=$_POST['startdate_tra'];
        $end_year_tra=$_POST['enddate_tra'];
        $description_tra=$_POST['training_description'];
        $start=date('Y/m/d',strtotime($start_year_tra));
        $end=date('Y/m/d',strtotime($end_year_tra));
        $prfl=$_SESSION['profileid'];

        echo $training_org;
        echo $training_prog.$training_loc ;

        $sql = "INSERT INTO training_details(program_name ,organization ,location ,start_date ,end_date ,description ,profiles_id)
            VALUES('$training_prog' ,'$training_org' ,'$training_loc' ,'$start', '$end' ,'$description_tra' ,'$prfl')";
            
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo "Registration Successful";
    }
    exit;
    mysqli_close($conn);
?> 