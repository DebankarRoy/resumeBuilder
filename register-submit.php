<?php
    session_start();
    include "conn.php";
    
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

        $pass=password_hash($password, PASSWORD_BCRYPT);

        $token=bin2hex(random_bytes(15));

        $sql = "INSERT INTO users (name, email, password, token, status)
                VALUES('$name', '$email', '$pass', '$token', 'active')";
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


        $sql = "select * from users where email='$email'"; 
        
        $result = mysqli_query($conn, $sql);
        
        while ($row=mysqli_fetch_array($result)) {
            $db_pass=$row['password'];
            $verify=password_verify($password, $db_pass);
            if($verify)
            {
                session_start();
                $_SESSION['loggedin']=true;    
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                header('Location: home.php');
                exit;
            }
            else
                header('Location: loginerror.php');
                exit;
        }
    }
    
    /*if(isset($_SESSION['ac_password']) && isset($_SESSION['ac_email']) && isset($_SESSION['ac_name']))
    {
        $password=$_SESSION['ac_password'];
        $email=$_SESSION['ac_email'];
        $name=$_SESSION['ac_name'];



        //echo $email.$name;

        //checking whether user exists or not

        $sql = "SELECT * FROM users WHERE email='$email'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            $sql = "select * from users where email='$email' and password='$password'";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
               die("Error: " . $sql . "<br>" . mysqli_error($conn));
               //echo("wrong password or email");
            }                
            while ($row=mysqli_fetch_array($result)) {

                $_SESSION['loggedin']=true;    
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                header('Location: home.php');
                header("refresh: 1"); 
                exit();
            }   
        }
        else{ 

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
                exit();
            }
        }   
    }*/
    //header('Location: home.php');
    exit();
    mysqli_close($conn);
?> 
