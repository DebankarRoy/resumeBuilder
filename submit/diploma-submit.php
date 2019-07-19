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


    if(isset($_POST['readRecorddiploma'])) {

        $sql = "SELECT * FROM diploma "; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {
                $id=$row['id'];
                $str_dp= $row['stream'];
                $str_yr_dp=$row['start_year'];
                $end_yr_dp= $row['end_year'];
                $clg_dp= $row['college'];
                $prf_scl_dp= $row['performence_scale'];
                $prf_mrk_dp= $row['performence_marks'];

                
                 echo '<div class="row data-fetch">
                        <div class="col col1"><h5 class="fetched-head">'; 
                            echo "Diploma, ".$str_dp;
                            echo "(".$str_yr_dp."-".$end_yr_dp.")";
                            echo '</h5>';

                            echo '<div>';
                                    echo $clg_dp;   
                            echo'</div>';

                            echo'<div>';
                                    echo "SGPA: ".$prf_scl_dp."/";
                                    echo $prf_mrk_dp;          
                            echo '</div>';

                        echo '</div>';

                        echo '<div class="col col2">';
                            echo '<a href="#" onclick="DeleteRecorddiploma('.$id.')"><img class="rmv-img" src="img/bin-with-lid.png"></a>
                            </div>
                            </div>';
            }
        } 
    }

    if(isset($_POST['deleteiddp'])){

        $user_id_dp = $_POST['deleteiddp']; 
        $deletequery = " delete from diploma where id ='$user_id_dp' ";
        if (!mysqli_query($conn,$deletequery)) {
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo("deletion sucessfull");
    }


    if(isset($_POST['degree_completion_status_dp'])){
        $userid_loggedin=$_SESSION['userid'];
        $deg_stat_dpl=$_POST['degree_completion_status_dp'];
        $college_dpl = $_POST['college_dp'];
        $start_year_dpl=$_POST['start_year_dp'];
        $end_year_dpl=$_POST['end_year_dp'];  
        $stream_name_dpl=$_POST['stream_dp'];
        $performance_scale_dpl=$_POST['performance_scale_dp'];
        $performance_marks_dpl=$_POST['performance_dp'];

        $sql = "INSERT INTO diploma(degree_status ,college ,start_year ,end_year ,stream ,performence_scale ,performence_marks,profiles_id)
            VALUES('$deg_stat_dpl' ,'$college_dpl' ,'$start_year_dpl' ,'$end_year_dpl' ,'$stream_name_dpl' ,'$performance_scale_dpl' ,'$performance_marks_dpl' ,'$userid_loggedin')";
            
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo "Registration Successful";
        echo "$college_dpl";
    }
    exit;
    mysqli_close($conn);
?> 