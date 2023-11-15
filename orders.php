<?php

$dbhost="localhost";
$dbuser="root";
$dbname="Trace";
$dbpassword="";

$connect=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Points!</title>    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <marquee behavior="" direction="right"><h1>Welcome <i class="fab fa-pizza"></i> hotel!!</h1></marquee>
    <div class="link">
    <a href="home.php">HOME</a>
        <a href="about.php">ABOUT</a>
        <a href="register.php">REGISTRATION</a>
        <a href="orders.php">ORDERS</a>
        <a href="contact.php">CONTACT</a>
    </div> <br><br>


    <form  action="create.php" method="POST" enctype="multipart/form-data">
    
    <label for="">name</label>
    <input name="name" placeholder="name" type="text" required> <br><br>

   <label for="">mobile</label>
   <input name="phonenumber" placeholder="phonenumber" type="number" required> <br><br>

   <label>order</label><br>

   <select  name="order" id="" class="select">
     <option value=""></option>
     <?php

     $sql="SELECT * FROM list";
     $result=mysqli_query($connect,$sql);
     if($result){
        $i=1;
        while($row=mysqli_fetch_assoc($result)){
            $food=$row['food'];
            $price_food=$row['price_food'];
            echo "<option value='$food'>$food</option>";
            echo "<option value='$price_food'>$price_food</option>";
        }
     }
     

     ?>

    </select><br>

   <label for="">place</label>
   <input name="place" placeholder="place" type="text" required><br><br>
   
   <input type="submit" name="submit" value="submit">

    
</form>
    
    
</body>
</html>