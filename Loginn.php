
<?php
  session_start();
  try{

    $conn =mysqli_connect('localhost','root','','login') or die('Unable to connect');
    }catch(Exception $e){
      echo "Message".$e->getMessage();
    }

$host="localhost";
$user ="root";
$password="";
$db= "login";



$data=mysqli_connect($host, $user, $password, $db);

if($data ==false)
{
    die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username =$_POST["username"];

    $password =$_POST["password"];

    $sql="select * from users where userName='".$username."'AND Password='".$password."'";
    $result =mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);

    if($row["user Type"]=="user"){
        $_SESSION["UserName"]==$username;
        header("home.php");
    }
    elseif($row["user Type"]=="admin")
    {
        $_SESSION["UserName"]==$username;
        header("location:lesson_26.php");
    }
    else{
        echo" user name or password incorrect";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body  style="background-image: url('ph3.jpg');">

         <center>
             <form action="" method="post">
            <h1>Login with your account</h1>
            <br><br><br><br>
            <div style="background-color: grey; width: 500px;">
                <br><br>
               <form action="lesson_26.php" method="POST">


            <div>
    <div>
        <label>username</label>
        <input type="text" name="username" required>
    </div>
    <div>
        <label>password</label>
        <input type="password" name="password" required>
    </div>
    <div>
        <input type="submit" value="Login" name="lo">
    </div>
</form>
    <br><br>
            </div>
         </center>

 <?php
 

if(isset($_POST['lo'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  
  $select= mysqli_query($data,"SELECT*FROM users WHERE UserName ='$username' AND Password='$password' ");
  $row = mysqli_fetch_array($select);
  if(is_array($row)){
    $_SESSION["username"] = $row['UserName'];
   
  }else{
    echo '<script type="text/javascript">';
    echo 'alert("Invalid Username or Password");';
    echo '</script>';
 }
}


?> 
</body>
</html>