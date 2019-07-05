<script>
        var edu=0;
    </script>
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
        
    $sql = "SELECT * FROM graduation ";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    } 

    while ($row=mysqli_fetch_array($result)) {
        if(empty($row['degree'])) {
                //$row['describe'] is empty
                
                   mysqli_close($conn);

            } else {
        $deg= $row['degree'];
        $str= $row['stream'];
        $str_yr= $row['start_year'];
        $end_yr= $row['end_year'];
        $clg= $row['college'];
        $prf_scl= $row['performence_scale'];
        $prf_mrk= $row['performence_marks'];
    }
?>
    <div class="row data-fetch">
        <div class="col col1"><h5 class="fetched-head"> <?php
                echo $deg.",";
                echo $str;
                echo "(".$str_yr."-";
                echo $end_yr.")";
            ?></h5>
            <div>
                <?php
                    echo $clg;
                ?>
            </div>
            <div>
                <?php
                    echo "SGPA: ".$prf_scl."/";
                    echo $prf_mrk;
                ?>
            </div>
        </div>
        <div class="col col2">
            <a href="#"><img class="edit-img" src="img/pencil-edit-button.png"></a>
            <a href="#"><img class="rmv-img" src="img/bin-with-lid.png"></a>
        </div>
    </div> 
    <script>
        var edu=1;
    </script>
 <?php   
    }
    mysqli_close($conn);
?> 