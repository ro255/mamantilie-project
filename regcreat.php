<?php

$dbhost="localhost";
$dbuser="root";
$dbname="Trace";
$dbpassword="";

$connect=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $place=$_POST['place'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];

    $sql="INSERT INTO customer VALUES('','$name','$mobile','$email','$gender','$place''$password','$confirm_password')";

    mysqli_query($connect,$sql);
    header('location:home.php');

}

?>