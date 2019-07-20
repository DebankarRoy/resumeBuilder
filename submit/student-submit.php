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

        $sql = "SELECT * FROM profiles"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {

                $id=$row['id'];
                $name= $row['name'];
                $email= $row['email_student'];
                $phone= $row['phone_number'];
                $place= $row['city'];
                
                ?>
                <div class="paddingleft">
                    <h2><?php echo$name; ?></h2>
                    <span class="grey"><?php echo$email; ?><br></span>
                    <span class="grey"><?php echo$phone; ?><br></span>
                    <span class="grey"><?php echo$place; ?></span>
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
    exit;
    mysqli_close($conn);
?> 
