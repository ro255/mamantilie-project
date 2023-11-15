<?php

$dbhost="localhost";
$dbuser="root";
$dbname="Trace";
$dbpassword="";

$connection=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if(isset($_GET['deleteid'])){
$id=$_GET['deleteid'];

$sql="delete from register where id=$id";


$result=mysqli_query($connection,$sql);

if($result){
    header("location:regdelete.php");
    //echo "deleted successful";
}
else{
    die (mysqli_error($connection));

}
}

?>