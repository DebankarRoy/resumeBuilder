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
        
    $sql = "SELECT * FROM diploma ";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    } 

    while ($row=mysqli_fetch_array($result)) {
        if(empty($row['stream'])) {
                //$row['describe'] is empty                  
                   mysqli_close($conn);
            } 
            else {
        $str_dp= $row['stream'];
        $str_yr_dp=$row['start_year'];
        $end_yr_dp= $row['end_year'];
        $clg_dp= $row['college'];
        $prf_scl_dp= $row['performence_scale'];
        $prf_mrk_dp= $row['performence_marks'];
            }
?>
    <div class="row data-fetch">
        <div class="col col1">
            <div>
                <h5 class="fetched-head"> <?php
                    echo "Diploma, ".$str_dp;
                    echo "(".$str_yr_dp."-".$end_yr_dp.")";
                ?>
                </h5>
            </div>
            <div>
                <?php
                    echo $clg_dp;
                ?>
            </div>
            <div>
                <?php
                    echo "SGPA: ".$prf_scl_dp."/";
                    echo $prf_mrk_dp;
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