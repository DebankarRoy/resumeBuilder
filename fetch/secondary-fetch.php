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
        
    $sql = "SELECT * FROM secondary ";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    } 
    
    while ($row=mysqli_fetch_array($result)) {
        if(empty($row['end_year'])) {
                //$row['describe'] is empty

                  
                   mysqli_close($conn);
            

            } else {
        $end_yr_s= $row['end_year'];
        $scl_s= $row['school'];
        $board_s= $row['board'];
        $prf_scl_s= $row['performence_scale'];
        $prf_mrk_s= $row['performence_marks'];
    }
?>
    <div class="row data-fetch">
        <div class="col col1"><h5 class="fetched-head"> <?php
                echo "X (Secondary)</h5>";
                echo "Year of Completion: ";
                echo $end_yr_s;
            ?>
            <div>
                <?php
                    echo $board_s." Board(";
                    echo $scl_s.")";
                ?>
            </div>
            <div>
                <?php
                    echo "SGPA: ".$prf_scl_s."/";
                    echo $prf_mrk_s;
                ?>
            </div>
        </div>
        <div class="col col2">
            <a href="#"><img class="edit-img" src="img/pencil-edit-button.png"></a>
            <a href="#"><img class="rmv-img" src="img/bin-with-lid.png"></a>
        </div>
    </div> 
    <script>
        var secondary=1;
        var edu=1;
        //console.log('secondary'+secondary);
    </script>

 <?php   
    }
    mysqli_close($conn);
?> 