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

    if(isset($_POST['readRecordspostgrad'])) {

        $sql = "SELECT * FROM post_graduation "; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {
                $id=$row['id'];
                $str_pg= $row['stream'];
                $deg_pg=$row['degree'];
                $str_yr_pg=$row['start_year'];
                $end_yr_pg= $row['end_year'];
                $clg_pg= $row['college'];
                $board_pg= $row['board'];
                $prf_scl_pg= $row['performence_scale'];
                $prf_mrk_pg= $row['performence_marks'];

                
                 echo '<div class="row data-fetch">
                        <div class="col col1"><h5 class="fetched-head">'; 
                            echo $deg_pg.", ".$str_pg;
                            echo "(".$str_yr_pg."-".$end_yr_pg.")";
                            echo '</h5>';

                            echo '<div>';
                                    echo $clg_pg;   
                            echo'</div>';

                            echo'<div>';
                                    echo "SGPA: ".$prf_scl_pg."/";
                                    echo $prf_mrk_pg;          
                            echo '</div>';

                        echo '</div>';

                        echo '<div class="col col2">';
                            echo '<a href="#" onclick="DeleteRecordpostgrad('.$id.')"><img class="rmv-img" src="img/bin-with-lid.png"></a>
                            </div>
                            </div>';
            }
        } 
    }

    if(isset($_POST['deleteidpg'])){

        $user_id_pg = $_POST['deleteidpg']; 
        $deletequery = " delete from post_graduation where id ='$user_id_pg' ";
        if (!mysqli_query($conn,$deletequery)) {
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo("deletion sucessfull");
    }


    if(isset($_POST['degree_completion_status_pg']) && $_POST['college_pg'] && isset($_POST['start_year_pg']) && isset($_POST['end_year_pg']) && isset($_POST['degree_pg']) && isset($_POST['stream_pg']) && isset($_POST['performance_scale_pg']) && isset($_POST['performance_pg'])){
        $userid_loggedin=$_SESSION['userid'];
        $deg_stat_pg=$_POST['degree_completion_status_pg'];
        $college_pg = $_POST['college_pg'];
        $start_year_pg=$_POST['start_year_pg'];
        $end_year_pg=$_POST['end_year_pg'];
        $degree_pg=$_POST['degree_pg'];    
        $stream_name_pg=$_POST['stream_pg'];
        $performance_scale_pg=$_POST['performance_scale_pg'];
        $performance_marks_pg=$_POST['performance_pg'];

        $sql = "INSERT INTO post_graduation(degree_status ,degree ,college ,start_year ,end_year ,stream ,performence_scale ,performence_marks,profiles_id)
            VALUES('$deg_stat_pg' ,'$degree_pg' ,'$college_pg' ,'$start_year_pg' ,'$end_year_pg' ,'$stream_name_pg' ,'$performance_scale_pg' ,'$performance_marks_pg' ,'$userid_loggedin')";
            
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo "Registration Successful";
    }
    exit;
    mysqli_close($conn);
?> 