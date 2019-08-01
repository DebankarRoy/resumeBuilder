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
        $sql = "SELECT * FROM profiles where user_id=$userid_loggedin"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {

                $id=$row['id'];
                $profileid=$id;
                $name= $row['name'];
                $email= $row['email_student'];
                $phone= $row['phone_number'];
                $place= $row['city'];
                
                ?>
                <div class="col col1 paddingleft">
                    <h2><?php echo$name; ?></h2>
                    <span class="grey"><?php echo$email; ?><br></span>
                    <span class="grey"><?php echo$phone; ?><br></span>
                    <span class="grey"><?php echo$place; ?></span>
                </div>
                <div class="col col2 update-edit-pos">
                        <a href="#" onclick="editprofile('<?php echo$id; ?>')"data-toggle='modal' data-target='#update_studentprofile'><img class="edit-img" src="img/pencil-edit-button.png"></a>
                </div>
             <?php   
            }
        }
    }
    
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['email']) && isset($_POST['phone_no'])){
        $userid_loggedin=$_SESSION['id'];
        $_SESSION['profileid'] = $var_value;
        $sal=$_POST['salutation'];
        $name = $_POST['name'];
        $phone_no=$_POST['phone_no'];
        $email = $_POST['email'];
        $current_city=$_POST['current_city'];
        $sql = "INSERT INTO profiles (salutation,name,email_student,phone_number,city,user_id)
                VALUES('$sal','$name','$email','$phone_no','$current_city', '$userid_loggedin')";
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }

        $sql = "SELECT * FROM profiles ORDER BY id desc LIMIT 1"; 
        $result = mysqli_query($conn,$sql);
        while ($row=mysqli_fetch_array($result)) {   
        $_SESSION['userid'] = $row['id'];
        $_SESSION['profilename'] = $row['name'];

        echo $_SESSION['userid'];
        echo $_SESSION['profilename'];
        
        }

        echo "Registration Successful";
        header('Location:/Resume/education.php');
    }

    if(isset($_POST['id']) && isset($_POST['id']) != "")
    {
        $user_id = $_POST['id'];
        $query = "SELECT * FROM profiles WHERE id = '$user_id'";
        if (!$result = mysqli_query($conn,$query)) {
            exit(mysqli_error());
        }
        
        $response = array();

        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
           
                $response = $row;
            }
        } 

        echo json_encode($response);
    }

    if(isset($_POST['updateid']))
    {
        $id=$_POST['updateid'];
        

    }

    exit;
    mysqli_close($conn);
?> 
