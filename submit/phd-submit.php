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


     if(isset($_POST['readRecordphd'])) {

        $sql = "SELECT * FROM phd "; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {

            $str_phd= $row['stream'];
            $str_yr_phd=$row['start_year'];
            $end_yr_phd= $row['end_year'];
            $clg_phd= $row['college'];
            $prf_scl_phd= $row['performence_scale'];
            $prf_mrk_phd= $row['performence_marks'];

                
                 echo '<div class="row data-fetch">
                        <div class="col col1"><h5 class="fetched-head">'; 
                            echo "PhD, ".$str_phd;
                            echo "(".$str_yr_phd."-".$end_yr_phd.")";
                            echo '</h5>';

                            echo '<div>';
                                    echo $clg_phd;   
                            echo'</div>';

                            echo'<div>';
                                    echo "SGPA: ".$prf_scl_phd."/";
                                    echo $prf_mrk_phd;          
                            echo '</div>';

                        echo '</div>';

                        echo '<div class="col col2">';
                            echo '<a href="#"><img class="edit-img" src="img/pencil-edit-button.png"></a
                                <a href="#"><img class="rmv-img" src="img/bin-with-lid.png"></a>
                            </div>
                            </div>';
            }
        } 
    }


    if(isset($_POST['degree_completion_status_ph'])){

        $deg_stat_ph=$_POST['degree_completion_status_ph'];
        $college_ph = $_POST['college_ph'];
        $start_year_ph=$_POST['start_year_ph'];
        $end_year_ph=$_POST['end_year_ph'];  
        $stream_name_ph=$_POST['stream_ph'];
        $performance_scale_ph=$_POST['performance_scale_ph'];
        $performance_marks_ph=$_POST['performance_ph'];

        $sql = "INSERT INTO phd(degree_status ,college ,start_year ,end_year ,stream ,performence_scale ,performence_marks)
            VALUES('$deg_stat_ph' ,'$college_ph' ,'$start_year_ph' ,'$end_year_ph' ,'$stream_name_ph' ,'$performance_scale_ph' ,'$performance_marks_ph')";
            
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo "Registration Successful";
       // header('Location: work-exp.php');
    }

    exit;
    mysqli_close($conn);
?> 