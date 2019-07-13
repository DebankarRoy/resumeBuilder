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
                }
                if($github!=''){
                    echo '<span class="title-style">Github Link:</span><br><a href="'.$github.'" class="link-clr">'.$github.'</a><br><br>';
                }
                if($playstore!=''){
                    echo '<span class="title-style">Playstore Link:</span><br><a href="'.$playstore.'" class="link-clr">'.$playstore.'</a><br><br>';
                }
                if($behance!=''){
                    echo '<span class="title-style">Behance Link:</span><br><a href="'.$behance.'" class="link-clr">'.$behance.'</a><br><br>';
                }
                if($other!=''){
                    echo '<span class="title-style">Others Link:</span><br><a href="'.$other.'" class="link-clr">'.$other.'</a><br><br>';
                }
                


                
            }
        }
    }

     if(isset($_POST['blog']) || isset($_POST['github']) || isset($_POST['playstore']) ||isset($_POST['behnace']) || isset($_POST['other'])){

        $blog=$_POST['blog'];
        $github = $_POST['github'];
        $playstore=$_POST['playstore'];
        $behance=$_POST['behance'];
        $other = $_POST['other'];

        $sql = "INSERT INTO work_samples (blog ,github ,playstore ,behance ,other)
            VALUES('$blog' ,'$github' ,'$playstore' ,'$behance' ,'$other')";
           
          
        if(!mysqli_query($conn,$sql)){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }
        echo "Registration Successful";
        //header('Location: home.php');
    }
    exit;
    mysqli_close($conn);
?> 
