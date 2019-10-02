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

    if(isset($_POST['readRecordskill'])) {

        $prfl=$_SESSION['profileid'];
        $sql = "SELECT * FROM skills where profiles_id=$prfl"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {

                $id=$row['id'];
                $skill= $row['skill'];
                $rating= $row['rating'];
       ?>
                <div class="col skill-holder">
                    <div class="col rating-col1"><h5><?php echo $skill; ?></h5>
                    <span class="rating"><?php echo $rating; ?></span></div>
                    <div class="col rating-col2"><a href="#" onclick="DeleteRecordskill('<?php echo $id; ?>')"><img class="rmv-img rating_part" src="img/bin-with-lid.png"></a></div>
                </div> 
        <?php
            }
        }        
    }

    if(isset($_POST['deleteidskill'])){

        $skill_id = $_POST['deleteidskill'];
        echo $skill_id; 
        $deletequery = " delete from skills where id ='$skill_id' ";
        if (!mysqli_query($conn,$deletequery)) {
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo("deletion sucessful");
    }

    if(isset($_POST['skillinput']) && isset($_POST['rating'])){
        $userid_loggedin=$_SESSION['profileid'];
        $skill=$_POST['skillinput'];
        $rating =$_POST['rating'];
       
        $sql = "INSERT INTO skills (skill ,rating ,profiles_id)
                VALUES('$skill' ,'$rating' ,'$userid_loggedin')";
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo "Registration Successful";
    }
    exit;
    mysqli_close($conn);
?> 
