<?php
    session_start();
    include "conn.php";
    
    if(!$conn){
        die("connection failed : ".mysqli_connect_error());
    }

    if(isset($_POST['readRecordsecondary'])) {

         $prfl=$_SESSION['profileid'];
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
       
            echo'<div class="row data-fetch">
                <div class="col col1">
                    <div>
                        <h5 class="fetched-head">';
                            echo "X (Secondary)</h5>";
                            echo "Year of Completion: ";
                            echo $end_yr_s;
                        
                   echo '</div>
                    <div>';

                            echo $board_s." Board(";
                            echo $scl_s.")";

                    echo'</div>
                    <div>';

                            echo "SGPA: ".$prf_scl_s."/";
                            echo $prf_mrk_s;

                    echo'</div>
                </div>

                <div class="col col2 abc" style="display:none;"><a href="#" onclick="DeleteRecordsecondary('.$id.')"><img class="rmv-img" src="img/bin-with-lid.png"></a>
                </div>
            </div> ';

            }
        }        
    }

    if(isset($_POST['deleteids'])){

        $user_id_s = $_POST['deleteids']; 
        $deletequery = " delete from secondary where id ='$user_id_s' ";
        if (!mysqli_query($conn,$deletequery)) {
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo("deletion sucessful");
    }

    if(isset($_POST['degree_completion_status_s'])){
        $userid_loggedin=$_SESSION['profileid'];
        $deg_stat_s=$_POST['degree_completion_status_s'];
        $school_s = $_POST['school_s'];
        $end_year_s=$_POST['end_year_s'];
        $board_s=$_POST['board_s'];    
        $performance_scale_s=$_POST['performance_scale_s'];
        $performance_marks_s=$_POST['performance_s'];

        $sql = "INSERT INTO secondary(degree_status ,school ,end_year ,board ,performence_scale ,performence_marks,profiles_id)
            VALUES ('$deg_stat_s' ,'$school_s' ,'$end_year_s' ,'$board_s' ,'$performance_scale_s' ,'$performance_marks_s' ,'$userid_loggedin')";
            
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo "Registration Successful";
    }
    exit;
    mysqli_close($conn);
?> 