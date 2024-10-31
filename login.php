<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/login.css">
</head>
<body>

       
        <form action="" method="POST">
 <div class="container">
        <div class="login">
            <h2>User Login</h2>
            <label for="username">Username: </label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password" >Password: </label>
            <input type="password" id="password" name="password"  required>
            </div>
        
       
            <div class="btn">
            <input type="reset" id="changecolor">
            <button name="button1" id="changecolor">Login</button>
            </div>
 </div>
            </form>
</body>
</html>

<?php
 include "conn.php";
  if(isset($_POST["button1"])){
    $UserName=$_POST["username"];
    $Password=$_POST["password"];

     $Asql="select * from admin ;";
     $Aresult=mysqli_query($conn,$Asql);

    //  $Tsql="select * from teacher where name=? and password=?;";
    //  $Tresult=mysqli_query($conn,$Tsql);

    //  $Ssql="select * from student where name=? and password=?;";
    //  $Sresult=mysqli_query($conn,$Ssql);

     if(mysqli_num_rows($Aresult)>0){
        while($Arow=mysqli_fetch_assoc($Aresult)){
                if($Arow["name"]===$UserName && $Arow["password"]===$Password){
                     header( "location:admin.php");
                }
                else{
            echo "<script>
            alert('wrong password and  name');
            window.location.replace('login.php');
            </script>";

                }



        }
     }
    //  else if(mysqli_num_rows($Tresult)>0){
    //     while($Trow=mysqli_fetch_assoc($Tresult)){
    //             $Trow["name"]
    //     }
    //  }
    //  else if(mysqli_num_rows($Sresult)>0){
    //     while($Srow=mysqli_fetch_assoc($Sresult)){
    //             $Srow["name"]
    //     }
    //  }
     else{


     }
  }
?>