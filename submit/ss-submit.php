<?php
    session_start();
    include "conn.php";
    
    if(!$conn){
        die("connection failed : ".mysqli_connect_error());
    }

    if(isset($_POST['readRecordss'])) {

        $prfl=$_SESSION['profileid'];
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
       
            echo'<div class="row data-fetch">
                <div class="col col1">
                    <div>
                        <h5 class="fetched-head">';
                            echo "XII (Senior Secondary),".$str_ss."<br></h5>";
                            echo "Year of Completion: ";
                            echo $end_yr_ss;
                        
                   echo '</div>
                    <div>';

                            echo $board_ss." Board(";
                            echo $scl_ss.")";

                    echo'</div>
                    <div>';

                            echo "SGPA: ".$prf_scl_ss."/";
                            echo $prf_mrk_ss;

                    echo'</div>
                </div>

                <div class="col col2 abc" style="display:none;"><a href="#" onclick="DeleteRecordss('.$id.')"><img class="rmv-img" src="img/bin-with-lid.png"></a>
                </div>
            </div> ';

            }
        }        
    }

    if(isset($_POST['deleteidss'])){

        $user_id_ss = $_POST['deleteidss']; 
        $deletequery = " delete from senior_secondary where id ='$user_id_ss' ";
        if (!mysqli_query($conn,$deletequery)) {
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo("deletion sucessful");
    }


    if(isset($_POST['degree_completion_status_ss'])){
        $userid_loggedin=$_SESSION['profileid'];
        $deg_stat_ss=$_POST['degree_completion_status_ss'];
        $school_ss= $_POST['school'];
        $end_year=$_POST['end_year_ss'];
        $board_ss=$_POST['board_ss'];    
        $stream_name_ss=$_POST['stream_ss'];
        $performance_scale_ss=$_POST['performance_scale_ss'];
        $performance_marks_ss=$_POST['performance_marks_ss'];

        $sql = "INSERT INTO senior_secondary(degree_status ,school ,end_year ,board ,stream ,performence_scale ,performence_marks,profiles_id)
            VALUES('$deg_stat_ss' ,'$school_ss' ,'$end_year' ,'$board_ss' ,'$stream_name_ss' ,'$performance_scale_ss' ,'$performance_marks_ss' ,'$userid_loggedin')";
            
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo "Registration Successful";
        echo "$sql";
    }
        exit;
        mysqli_close($conn);
?> 