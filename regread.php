<?php

$dbhost='localhost';
$dbuser='root';
$dbname='Trace';
$dbpassword='';

$connection=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customers order</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <marquee behavior="" direction="right"><h1>customers orders of food</h1></marquee>  
<button class="user"><a href="register.php">Add user</a> 
</button> 
    <table>
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">mobile</th>
                <th scope="col">email</th>
                <th scope="col">gender</th>
                <th scope="col">place</th>
                <th scope="col">password</th>
                <th scope="col">confirm_password</th>
                <th scope="col">OPERATIONS</th>
            </tr>
            <tbody>
        <?php

        $sql= "SELECT *FROM register";
        $result=mysqli_query($connection,$sql);

        if($result){
            $i=1;
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $mobile=$row['mobile'];
                $email=$row['email'];
                $gender=$row['gender'];
                $place=$row['place'];
                $password=$row['password'];
                $confirm_password=$row['confirm_password'];

                echo'
                <tr>
                <th scope="row">'.$i.'</th>
                <td>'.$name.'</td>
                <td>'.$mobile.'</td>
                <td>'.$email.'</td>
                <td>'.$gender.'</td>
                <td>'.$place.'</td>
                <td>'.$password.'</td>
                <td>'.$confirm_password.'</td>
            
                <td>
                <button class="btn btn-primary"><a class="text_light"   href="hmupdate.php?updateid='.$id.'">Update</a></button>
                <button class="btn btn-danger"><a class="text_light"href="stdelete.php? deleteid='.$id.'" >Delete</a> </button>
                </td>
 </tr>

 ';
 
 $i++;
            }
        }
        ?>
        </thead>
    </table>
    
</body>
</html>