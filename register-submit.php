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
    
    if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['password']))
    {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $password = $_GET['password'];

        $name=mysqli_real_escape_string($conn,$_GET['name']);
        $password=mysqli_real_escape_string($conn,$_GET['password']);
        $email=mysqli_real_escape_string($conn,$_GET['email']);

        $sql = "INSERT INTO users (name, email, password)
                VALUES('$name', '$email', '$password')";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            die("Error : ".$sql."<br>".mysqli_error($conn));
        }

        while ($row=mysqli_fetch_array($result)) {
            session_start();
            $_SESSION['loggedin']=true;    
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            header('Location: home.php');
            exit;
        }   
    }

    if(isset($_GET['email']) && isset($_GET['password']))
    {
        $email = $_GET['email'];
        $password = $_GET['password'];

        $email=mysqli_real_escape_string($conn,$_GET['email']);
        $password=mysqli_real_escape_string($conn,$_GET['password']);

        //echo $email.$password;

        $sql = "select * from users where email='$email' and password='$password'";
        
        $result = mysqli_query($conn, $sql);
        if (!$result) {
           die("Error: " . $sql . "<br>" . mysqli_error($conn));
           //echo("wrong password or email");
        }
        
        if(mysqli_num_rows($result)==0){
                
                header('Location: loginerror.php');
                //echo "<h3>login failed,try again</h3>";
        }
        while ($row=mysqli_fetch_array($result)) {
            session_start();
            $_SESSION['loggedin']=true;    
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            header('Location: home.php');
            exit;
        }
    }
    //header('Location: login.php');
    exit;
    mysqli_close($conn);
?> 
