<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $message=md5($message);

    $checkEmail="SELECT * Form contact_form where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo"Email Address Already Exists !";
    }
    else{
        $insertQuery="INSERT INTO contact_form(name,email,subject,message)
        VALUES ('$name','$email','$subject', '$message')";
        if($conn->query($insertQuery)==TRUE){
            header("location: index.php");
        }
        else{
            echo"Error:".$conn->error;
        }
    }
}
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $message = $_POST['message'];
    $message=md5($message);

    $sql="SELECT * Form contact_form where email='$email' and message='$message'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("location: homepage.php");
        exist();
    }
    else{
        echo "Not Found , Incorrect Email or Message";
    }

}
?>