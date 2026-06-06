<?php

session_start();

include("config/db.php");

if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query=mysqli_query($conn,

    "SELECT * FROM admin
    WHERE username='$username'
    AND password='$password'");

    if(mysqli_num_rows($query)>0)
    {
        $_SESSION['admin']=$username;

        header("Location:dashboard.php");
    }
    else
    {
        echo "Invalid Login";
    }
}

?>

<link rel="stylesheet" href="css/style.css">

<div class="form-box">

<h2>Inventory Login</h2>

<form method="POST">

<input type="text"
name="username"
placeholder="Username"
required>

<input type="password"
name="password"
placeholder="Password"
required>

<button name="login">

Login

</button>

</form>

</div>