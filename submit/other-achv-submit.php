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


     if(isset($_POST['readRecordother'])) {

        $sql = "SELECT * FROM other_details "; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            echo'<div class="row data-fetch heads"><h3>Others:</h3></div>';
            while ($row = mysqli_fetch_array($result)) {
                $id=$row['id'];
                $profile=$row['description'];

                echo '<div class="row data-fetch">
                        <div class="col col1"><h5 class="fetched-head">'; 
                                echo '<li>'.$profile.'</li></h5>';
                        echo '</div>';

                        echo '<div class="col col2">';
                            echo '<a href="#" onclick="DeleteRecordother('.$id.')"><img class="rmv-img" src="img/bin-with-lid.png"></a>
                            </div>
                            </div>';
            }
        } 
    }

    if(isset($_POST['deleteidother'])){
        $userid_loggedin=$_SESSION['userid'];
        $user_id_oth = $_POST['deleteidother']; 
        $deletequery = " delete from other_details where id ='$user_id_oth' ";
        if (!mysqli_query($conn,$deletequery)) {
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo("deletion sucessful");
    }

    if(isset($_POST['achv_description']))
        {
        $userid_loggedin=$_SESSION['userid'];
        $description_achv=$_POST['achv_description'];
        
        $sql = "INSERT INTO other_details(description ,profiles_id)
            VALUES('$description_achv' ,'$userid_loggedin')";
            
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo "Registration Successful";
    }
    exit;
    mysqli_close($conn);
?> 