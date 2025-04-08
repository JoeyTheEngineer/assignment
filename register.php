<?php
include 'connect.php';

if(isset($_POST['signUp'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $checkEmail="SELECT * From login where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "Email Address Already Exists!";
    }
    else{
        $insertQuery="INSERT INTO login(name,email,password)
                      VALUES('$name','$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: login6.php");
            }
            else{
                echo "Error:".$conn->error;
            }

    }
}

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM login where email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("location: AddToCart.php");
        exit();
    }
    else{
        echo "Not Found, Incorrect Email or Password";
    }
}

?>