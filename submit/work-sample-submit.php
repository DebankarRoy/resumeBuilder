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

        $sql = "SELECT * FROM work_samples"; 
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {

                $id=$row['id'];
                $blog=$row['blog'];
                $github = $row['github'];
                $playstore=$row['playstore'];
                $behance=$row['behance'];
                $other = $row['other'];
                    
                    
                if($blog!=''){
                    echo '<span class="title-style">Blog Link:</span><br><a href="'.$blog.'" class="link-clr">'.$blog.'</a><br><br>';
                 ?>  
                 <div class="col rating-col2 pos-resume"><a href="#" onclick="DeleteRecordworksample('<?php echo $blog; ?>')"><img class="rmv-img rating_part" src="img/bin-with-lid.png"></a>
                 </div>
                 <?php
                }
                if($github!=''){
                    echo '<span class="title-style">Github Link:</span><br><a href="'.$github.'" class="link-clr">'.$github.'</a><br><br>';
                    ?>  
                 <div class="col rating-col2 pos-resume"><a href="#" onclick="DeleteRecordworksample('<?php echo $github; ?>')"><img class="rmv-img rating_part" src="img/bin-with-lid.png"></a>
                 </div>
                 <?php
                }
                if($playstore!=''){
                    echo '<span class="title-style">Playstore Link:</span><br><a href="'.$playstore.'" class="link-clr">'.$playstore.'</a><br><br>';
                   ?>  
                 <div class="col rating-col2 pos-resume"><a href="#" onclick="DeleteRecordworksample('<?php echo $playstore; ?>')"><img class="rmv-img rating_part" src="img/bin-with-lid.png"></a>
                 </div>
                 <?php 
                }
                if($behance!=''){
                    echo '<span class="title-style">Behance Link:</span><br><a href="'.$behance.'" class="link-clr">'.$behance.'</a><br><br>';
                    ?>  
                 <div class="col rating-col2 pos-resume"><a href="#" onclick="DeleteRecordworksample('<?php echo $behance; ?>')"><img class="rmv-img rating_part" src="img/bin-with-lid.png"></a>
                 </div>
                 <?php 
                }
                if($other!=''){
                    echo '<span class="title-style">Others Link:</span><br><a href="'.$other.'" class="link-clr">'.$other.'</a><br><br>';
                    ?>  
                 <div class="col rating-col2 pos-resume"><a href="#" onclick="DeleteRecordworksample('<?php echo $other; ?>')"><img class="rmv-img rating_part" src="img/bin-with-lid.png"></a>
                 </div>
                 <?php
                }
                


                
            }
        }
        
    }
    echo "<a href='work-sample.php'><span class='clr-blue'>+ Add more info:</span></a>";


    if(isset($_POST['deleteidworksample'])){

        $worksample_id = $_POST['deleteidworksample'];
        echo $skill_id; 
        $deletequery = " delete from work_samples where coloumn ='$worksample_id";
        if (!mysqli_query($conn,$deletequery)) {
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo("deletion sucessful");
    }


     if(isset($_POST['blog']) || isset($_POST['github']) || isset($_POST['playstore']) ||isset($_POST['behnace']) || isset($_POST['other'])){
        $userid_loggedin=$_SESSION['userid'];
        $blog=$_POST['blog'];
        $github = $_POST['github'];
        $playstore=$_POST['playstore'];
        $behance=$_POST['behance'];
        $other = $_POST['other'];

        $sql = "INSERT INTO work_samples (blog ,github ,playstore ,behance ,other ,profiles_id)
            VALUES('$blog' ,'$github' ,'$playstore' ,'$behance' ,'$other' ,'$userid_loggedin')";
           
          
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo "Registration Successful";
        header('Location: /Resume/resume.php');
    }
    exit;
    mysqli_close($conn);
?> 
