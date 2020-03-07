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

    if(isset($_POST['fetchRecordstudent'])) {
        $userid_loggedin=$_SESSION['id'];
        $sql = "SELECT * FROM profiles where user_id=$userid_loggedin"; 
        $result = mysqli_query($conn,$sql);

        $no_of_rows=mysqli_num_rows ( $result );
        if($no_of_rows > 0){

            for ($i=0; $i <$no_of_rows ; $i++) {

                while ($row = mysqli_fetch_array($result)) {

                    //$form_counter=1;
                    $profileid=$row['id'];
                    $name= $row['name'];
                    $email= $row['email_student'];
                    $phone= $row['phone_number'];
                    $place= $row['city'];
                    
                    ?>
                    <div class="student-profile row box boxforresume " onclick="openmyresume('<?php echo $profileid?>')">
                        <form action="resume.php" id="<?php echo $profileid?>" method="post">
                        <input type="hidden" value="<?php echo $profileid?>" name="activeprofileid" />
                        </form>
                        <div class="col padding-resume">
                            <h2><?php echo$name; ?></h2>
                            <span class="grey"><?php echo$email; ?><br></span>
                            <span class="grey"><?php echo$phone; ?><br></span>
                            <span class="grey"><?php echo$place; ?></span>   
                        </div>                        
                    </div>
                    <div class="row pad-row "></div>
                 <?php   
                }
            }
        }
        else
        {
            ?>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        
                      </div>
                      <div class="modal-body">
                        <h5 style="text-align: center">You don't have any resume</h5>
                      </div>
                      <div class="modal-footer">    
                        <a class="btn btn-warning" href="/Resume/student.php" >Create a new</a>
                        <a class="btn btn-primary" href="/Resume/home.php">Home</a>
                      </div>
                    </div>
                  </div>
                </div>
                <script>
                    $(document).ready(function(){
                        $("#exampleModalCenter").modal('show');
                    });
                    $('#exampleModalCenter').modal({backdrop: 'static', keyboard: false});
                </script>
            <?php
        }
    }

    if(isset($_POST[''])) {
    }
    
    
    exit;
    mysqli_close($conn);
?> 
