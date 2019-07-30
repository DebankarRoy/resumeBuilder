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
                        <a href="#" onclick="editprofile('<?php echo$name; ?>')"data-toggle='modal' data-target='#studentprofile'><img class="edit-img" src="img/pencil-edit-button.png"></a>
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

?>
                <!-- Modal -->
    <div class="modal fade" id="studentprofile" tabindex="-1" role="dialog" aria-labelledby="studentprofileTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content update-height">
        
            <div class="header-container update-clr">Student Details</div>
            <span class="close" aria-hidden="true" data-dismiss="modal">+</span>

            <div class="col data-update update-padding">
                <div class="row form-group">
                    <label for="name" class="control-label" id="x">Name:</label>
                    <div class="input-group salutation">
                        <input class="form-control name" id="name" tabindex="2" name="name" placeholder="Update your name" value="" type="text">
                 
                    </div>
                </div>
                <div class="row form-group">
                    <label for="number" class="control-label">Mobile Number:</label>
                    <div class="input-group">
                        <input type="number"  class="wid form-control mobile-number" tabindex="4" id="phone_primary" name="phone_no" placeholder="Update mobile number " value="">
                    </div>
                </div>

                <div class="row form-group">
                    <label for="email" class="control-label">Email:</label>
                    <div class="input-group">
                        <input type="text" class="wid form-control" id="email" tabindex="5" name="email" placeholder="Update your email" value="" autocomplete="off">   
                    </div>
                </div>

                <div class="row form-group">
                    <label for="current_city" class="control-label">Current City:</label>
                    <div class="input-group">
                        <input type="text" class="wid form-control" id="current_city" tabindex="6" name="current_city" placeholder="Update your city" value="" autocomplete="off">    
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="button" class="btn btn-secondary update-btn-pos" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info update-btn-pos">Save changes</button>
            </div>
        </div>
      </div>
    </div>

<?php

    exit;
    mysqli_close($conn);
?> 
