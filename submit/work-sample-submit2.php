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

    if(isset($_POST['readRecordworksample'])) {

        $sql = "SELECT * FROM blog"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {

                $id=$row['id'];
                $blog=$row['blog'];         
                    
                if($blog!=''){
                    echo '<span class="title-style">Blog Link:</span><br><a href="'.$blog.'" class="link-clr">'.$blog.'</a><br><br>';
                 ?>
                 <div class="col rating-col2 pos-resume"><a href="#" onclick="DeleteRecordblog('<?php echo $id; ?>')"><img class="rmv-img rating_part" src="img/bin-with-lid.png"></a>
                 </div>  
                 <?php
                }
            }
        }

         $sql = "SELECT * FROM github"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {

                $id=$row['id'];
                $github = $row['github'];     
                    
                
                if($github!=''){
                    echo '<span class="title-style">Github Link:</span><br><a href="'.$github.'" class="link-clr">'.$github.'</a><br><br>';
                    ?>  
                 <div class="col rating-col2 pos-resume"><a href="#" onclick="DeleteRecordgithub('<?php echo $id; ?>')"><img class="rmv-img rating_part" src="img/bin-with-lid.png"></a>
                 </div>
                 <?php
                }         
            }
        }


        $sql = "SELECT * FROM playstore"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {

                $id=$row['id'];
                $playstore=$row['playstore'];              
                    
                
                if($playstore!=''){
                    echo '<span class="title-style">Playstore Link:</span><br><a href="'.$playstore.'" class="link-clr">'.$playstore.'</a><br><br>';
                   ?>  
                 <div class="col rating-col2 pos-resume"><a href="#" onclick="DeleteRecordplaystore('<?php echo $id; ?>')"><img class="rmv-img rating_part" src="img/bin-with-lid.png"></a>
                 </div>
                 <?php 
                }             
            }
        }

        $sql = "SELECT * FROM behance"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {

                $id=$row['id'];
                $behance=$row['behance'];
                    
                if($behance!=''){
                    echo '<span class="title-style">Behance Link:</span><br><a href="'.$behance.'" class="link-clr">'.$behance.'</a><br><br>';
                    ?>  
                 <div class="col rating-col2 pos-resume"><a href="#" onclick="DeleteRecordbehance('<?php echo $id; ?>')"><img class="rmv-img rating_part" src="img/bin-with-lid.png"></a>
                 </div>
                 <?php 
                }                
            }
        }

        $sql = "SELECT * FROM other_samples"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {

                $id=$row['id'];
                $other = $row['other'];
                      
                
                if($other!=''){
                    echo '<span class="title-style">Others Link:</span><br><a href="'.$other.'" class="link-clr">'.$other.'</a><br><br>';
                    ?>  
                 <div class="col rating-col2 pos-resume"><a href="#" onclick="DeleteRecordothersample('<?php echo $id; ?>')"><img class="rmv-img rating_part" src="img/bin-with-lid.png"></a>
                 </div>
                 <?php
                }  
            }
        }

    }
    echo "<a href='work-sample.php'><span class='clr-blue'>+ Add more info:</span></a>";


    if(isset($_POST['deleteidblog'])){

        $worksample_id = $_POST['deleteidblog']; 
        $deletequery = " delete from blog where id ='$worksample_id'";
        if (!mysqli_query($conn,$deletequery)) {
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo("deletion sucessful");
    }

    if(isset($_POST['deleteidgithub'])){

        $worksample_id = $_POST['deleteidgithub'];
        echo $skill_id; 
        $deletequery = " delete from github where id ='$worksample_id'";
        if (!mysqli_query($conn,$deletequery)) {
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo("deletion sucessful");
    }

    if(isset($_POST['deleteidplaystore'])){

        $worksample_id = $_POST['deleteidplaystore'];
        echo $skill_id; 
        $deletequery = " delete from playstore where id ='$worksample_id'";
        if (!mysqli_query($conn,$deletequery)) {
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo("deletion sucessful");
    }

    if(isset($_POST['deleteidbehance'])){

        $worksample_id = $_POST['deleteidbehance'];
        echo $skill_id; 
        $deletequery = " delete from behance where id ='$worksample_id'";
        if (!mysqli_query($conn,$deletequery)) {
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo("deletion sucessful");
    }

    if(isset($_POST['deleteidothersample'])){

        $worksample_id = $_POST['deleteidothersample'];
        echo $skill_id; 
        $deletequery = " delete from other_samples where id ='$worksample_id'";
        if (!mysqli_query($conn,$deletequery)) {
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo("deletion sucessful");
    }


     if(isset($_POST['blog'])){
        $userid_loggedin=$_SESSION['userid'];
        $blog=$_POST['blog'];

        if ($blog!='') { 
            $sql = "INSERT INTO blog (blog ,profiles_id)
                VALUES('$blog' ,'$userid_loggedin')";   

            if(!mysqli_query($conn,$sql)){
                die("Error : ".$sql."<br>".mysqli_error($conn));
            }
            echo "Registration Successful";
        //header('Location: /Resume/resume.php');
        }
    }

    if(isset($_POST['github'])){
        $userid_loggedin=$_SESSION['userid'];
        $github = $_POST['github'];
        
        if ($github!='') { 
            $sql = "INSERT INTO github (github ,profiles_id)
                VALUES('$github' ,'$userid_loggedin')";
               
              
            if(!mysqli_query($conn,$sql)){
                die("Error : ".$sql."<br>".mysqli_error($conn));
            }
            echo "Registration Successful";
            //header('Location: /Resume/resume.php');
        }
    }

    if(isset($_POST['playstore'])){
        $userid_loggedin=$_SESSION['userid'];
        $playstore=$_POST['playstore'];

        if ($playstore!='') { 
            $sql = "INSERT INTO playstore (playstore ,profiles_id)
                VALUES('$playstore' ,'$userid_loggedin')";
               
              
            if(!mysqli_query($conn,$sql)){
                die("Error : ".$sql."<br>".mysqli_error($conn));
            }
            echo "Registration Successful";
            //header('Location: /Resume/resume.php');
        }
    }

    if(isset($_POST['behance'])){
        $userid_loggedin=$_SESSION['userid'];
        $behance=$_POST['behance'];

        if ($behance!='') { 
            $sql = "INSERT INTO behance (behance ,profiles_id)
                VALUES('$behance' ,'$userid_loggedin')";
               
              
            if(!mysqli_query($conn,$sql)){
                die("Error : ".$sql."<br>".mysqli_error($conn));
            }
            echo "Registration Successful";
            //header('Location: /Resume/resume.php');
        }
    }

    if(isset($_POST['other'])){
        $userid_loggedin=$_SESSION['userid'];
        $other = $_POST['other'];

        if ($other!='') { 
            $sql = "INSERT INTO other_samples (other ,profiles_id)
                VALUES('$other' ,'$userid_loggedin')";
               
              
            if(!mysqli_query($conn,$sql)){
                die("Error : ".$sql."<br>".mysqli_error($conn));
            }
            echo "Registration Successful";
            //header('Location: /Resume/resume.php');
        }
    }

    //header('Location: /Resume/resume.php');
    exit;
    mysqli_close($conn);
?> 
