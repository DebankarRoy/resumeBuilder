<?php
    session_start();
    include "conn.php";
    
    $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
    if(!$conn){
        die("connection failed : ".mysqli_connect_error());
    }

    if(isset($_POST['readRecordGrad'])) {

        //$userid_loggedin=$_SESSION['id'];
        $prfl=$_SESSION['profileid'];
        $sql = "SELECT * FROM graduation where profiles_id = $prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {
                $id=$row['id'];
                $deg= $row['degree'];
                $str= $row['stream'];
                $str_yr= $row['start_year'];
                $end_yr= $row['end_year'];
                $clg= $row['college'];
                $prf_scl= $row['performence_scale'];
                $prf_mrk= $row['performence_marks'];
                
                 echo '<div class="row data-fetch">
                        <div class="col col1"><h5 class="fetched-head">'; 
                                echo $deg.",";
                                echo $str;
                                echo "(".$str_yr."-";
                                echo $end_yr.")";
                            echo '</h5>';

                            echo '<div>';
                                    echo $clg;   
                            echo'</div>';

                            echo'<div>';
                                    echo "SGPA: ".$prf_scl."/";
                                    echo $prf_mrk;          
                            echo '</div>';

                        echo '</div>';

                        echo '<div class="col col2 abc" id="ab" style="display:none;">';
                            echo '<a href="#" onclick="DeleteRecordgrad('.$id.')"><img class="rmv-img" src="img/bin-with-lid.png"></a>
                            </div>
                            </div>';
            }
        } 
    }

    if(isset($_POST['deleteid'])){

        $user_id = $_POST['deleteid']; 
        $deletequery = " delete from graduation where id ='$user_id' ";
        if (!mysqli_query($conn,$deletequery)) {
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo("deletion sucessful");
    }


    if(isset($_POST['degree_completion_status_grad']) && $_POST['college'] && isset($_POST['start_year_clg']) && isset($_POST['end_year_clg']) && isset($_POST['degree']) && isset($_POST['stream_clg'])){
        
        //$userid_loggedin=$_SESSION['userid'];
        $prfl=$_SESSION['profileid'];
        $deg_stat=$_POST['degree_completion_status_grad'];
        $college = $_POST['college'];
        $start_year=$_POST['start_year_clg'];
        $end_year=$_POST['end_year_clg'];
        $degree_name = $_POST['degree'];
        $stream_name=$_POST['stream_clg'];
        $performance_scale=$_POST['performance_scale_clg'];
        $performance_marks=$_POST['performance_clg'];

        $sql = "INSERT INTO graduation(degree_status ,college ,start_year ,end_year ,degree ,stream ,performence_scale ,performence_marks,profiles_id)
            VALUES('$deg_stat' ,'$college' ,'$start_year', '$end_year' ,'$degree_name' ,'$stream_name' ,'$performance_scale' ,'$performance_marks','$prfl')";
            
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo "Registration Successful";
        /*echo "$deg_stat";
        echo "$college" .$performance_scale;*/
    }
    
    exit;
    mysqli_close($conn);
?> 