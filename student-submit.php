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

    if(isset($_POST['readRecordstudent'])) {

        $userid_loggedin=$_SESSION['id'];
        $prfl=$_SESSION['profileid'];
        $sql = "SELECT * FROM profiles where user_id=$userid_loggedin and id=$prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {

                $id=$row['id'];
                $profileid=$id;
                $name= $row['name'];
                $email= $row['email_student'];
                $phone= $row['phone_number'];
                $place= $row['city'];
                $image= $row['image'];
                ?>
                <div class="row hove" onmouseover="showedit()" onmouseout="shownothing()">
                    <div class="col dp-col">
                        <img class="dp" src='<?php echo $image ?>'  >
                    </div>
                    <div class="col col1 paddingleft">
                        <h2><?php echo$name; ?></h2>
                        <span class="grey"><?php echo$email; ?><br></span>
                        <span class="grey"><?php echo$phone; ?><br></span>
                        <span class="grey"><?php echo$place; ?></span>
                    </div>
                    <div class="col col2 update-edit-pos abc" style="display: none"  >
                            <a href="#" onclick="getstudent('<?php echo$id; ?>')"data-toggle='modal' data-target='#update_studentprofile'><img class="edit-img" src="img/pencil-edit-button.png"></a>
                    </div>
                </div>
             <?php   
            }
        }
    }
    
    if(isset($_POST['name'])){
        $userid_loggedin=$_SESSION['id'];
        //$_SESSION['profileid'] = $last_id;
        $sal=$_POST['salutation'];
        $name = $_POST['name'];
        $phone_no=$_POST['phone_no'];
        $email = $_POST['email'];
        $current_city=$_POST['current_city'];
        $uploadedimg=$_FILES['file'];

        echo "   ";
        print_r($uploadedimg);
        /*echo get_current_user();
        echo exec('whoami'); */

        $dp=$uploadedimg['name'];
        $dp_temp=$uploadedimg['tmp_name'];

        $destinationfile='img/profile_pic/'.$dp;
        move_uploaded_file($dp_temp,$destinationfile);


        /*echo "dp=".$dp;
        echo "dp_temp=".$dp_temp;*/
        echo "destination".$destinationfile;

        $sql = "INSERT INTO profiles (salutation,name,email_student,phone_number,city,image,user_id)
                VALUES('$sal','$name','$email','$phone_no','$current_city','$destinationfile','$userid_loggedin')";
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }

        $sql = "SELECT * FROM profiles ORDER BY id desc LIMIT 1"; 
        $result = mysqli_query($conn,$sql);
        while ($row=mysqli_fetch_array($result)) {   
        $_SESSION['profileid'] = $row['id'];
        $_SESSION['profilename'] = $row['name'];

        echo $_SESSION['profileid'];
        echo $_SESSION['profilename'];
        
        }

        echo "Registration Successful";
        header('Location:/Resume/education.php');
    }

    if(isset($_POST['updatestudent']))
    {
        $userid_loggedin=$_SESSION['id'];
        $prfl=$_SESSION['profileid'];

       

        $sql = "SELECT * FROM profiles where user_id=$userid_loggedin and id=$prfl";
        $result = mysqli_query($conn,$sql);
        
        
        $response = array();

        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
           
               $response=$row;
            }
        } 

        echo json_encode($response);
    }

    if(isset($_POST['updateid']))
    {
        $id=$_POST['updateid'];
    }


    if(isset($_POST['update_name']) || isset($_POST['update_email']) || isset($_POST['update_city']) || isset($_POST['update_phone_number'])){
    $userid_loggedin=$_SESSION['id'];
    $prfl=$_SESSION['profileid'];   

    $hidden_user_idupd = $_POST['hidden_user_idupd'];
    $firstnameupd = $_POST['update_name'];
    $cityupd = $_POST['update_city'];
    $emailupd = $_POST['update_email'];
    $mobileupd = $_POST['update_phone_number'];

    $sql = " UPDATE `profiles` SET `name`='$firstnameupd',`email_student`='$emailupd',`phone_number`='$mobileupd',`city`='$cityupd' WHERE user_id=$userid_loggedin and id=$prfl ";

     if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo "working";
}

    exit;
    mysqli_close($conn);
?> 

