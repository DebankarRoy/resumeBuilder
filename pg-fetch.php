
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
        
    $sql = "SELECT * FROM post_graduation ";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    } 

    while ($row=mysqli_fetch_array($result)) {
        $str_pg= $row['stream'];
        $deg_pg=$row['degree'];
        $str_yr_pg=$row['start_year'];
        $end_yr_pg= $row['end_year'];
        $clg_pg= $row['college'];
        $board_pg= $row['board'];
        $prf_scl_pg= $row['performence_scale'];
        $prf_mrk_pg= $row['performence_marks'];
    }
?>
    <div class="row data-fetch">
        <div class="col col1">
            <div>
                <h5 class="fetched-head"> <?php
                    echo $deg_pg.", ".$str_pg;
                    echo "(".$str_yr_pg."-".$end_yr_pg.")";
                ?>
                </h5>
            </div>
            <div>
                <?php
                    echo $clg_pg;
                ?>
            </div>
            <div>
                <?php
                    echo "SGPA: ".$prf_scl_pg."/";
                    echo $prf_mrk_pg;
                ?>
            </div>
        </div>

        <div class="col col2">
            <a href="#"><img class="edit-img" src="img/pencil-edit-button.png"></a>
            <a href="#"><img class="rmv-img" src="img/bin-with-lid.png"></a>
        </div>
    </div> 

 <?php   
    
    mysqli_close($conn);
?> 