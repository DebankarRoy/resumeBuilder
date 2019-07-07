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
        
    $sql = "SELECT * FROM senior_secondary ";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    } 

    while ($row=mysqli_fetch_array($result)) {
        if(empty($row['end_year'])) {
                //$row['describe'] is empty

                  
                   mysqli_close($conn);
            

            } else {
        $str_ss= $row['stream'];
        $end_yr_ss= $row['end_year'];
        $scl_ss= $row['school'];
        $board_ss= $row['board'];
        $prf_scl_ss= $row['performence_scale'];
        $prf_mrk_ss= $row['performence_marks'];
    }
?>
    <div class="row data-fetch">
        <div class="col col1">
            <div>
                <h5 class="fetched-head"> <?php
                    echo "XII (Senior Secondary),".$str_ss."<br></h5>";
                    echo "Year of Completion: ";
                    echo $end_yr_ss;
                ?>
                
            </div>
            <div>
                <?php
                    echo $board_ss." Board(";
                    echo $scl_ss.")";
                ?>
            </div>
            <div>
                <?php
                    echo "SGPA: ".$prf_scl_ss."/";
                    echo $prf_mrk_ss;
                ?>
            </div>
        </div>

        <div class="col col2">
            <a href="#"><img class="edit-img" src="img/pencil-edit-button.png"></a>
            <a href="#"><img class="rmv-img" src="img/bin-with-lid.png"></a>
        </div>
    </div> 
    <script>
        var seniorsecondary=1;
        var edu=1;
       // console.log("ss"+seniorsecondary);
    </script>
 <?php   
    }
    mysqli_close($conn);
?> 