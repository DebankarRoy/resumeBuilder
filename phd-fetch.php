
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
        
    $sql = "SELECT * FROM phd ";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    } 

    while ($row=mysqli_fetch_array($result)) {
        $str_phd= $row['stream'];
        $str_yr_phd=$row['start_year'];
        $end_yr_phd= $row['end_year'];
        $clg_phd= $row['college'];
        $prf_scl_phd= $row['performence_scale'];
        $prf_mrk_phd= $row['performence_marks'];
    }
?>
    <div class="row data-fetch">
        <div class="col col1">
            <div>
                <h5 class="fetched-head"> <?php
                    echo "PhD, ".$str_phd;
                    echo "(".$str_yr_phd."-".$end_yr_phd.")";
                ?>
                </h5>
            </div>
            <div>
                <?php
                    echo $clg_phd;
                ?>
            </div>
            <div>
                <?php
                    echo "SGPA: ".$prf_scl_phd."/";
                    echo $prf_mrk_phd;
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