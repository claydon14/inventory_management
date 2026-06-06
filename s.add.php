<?php

include("../config/db.php");

if(isset($_POST['save']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];

    mysqli_query($conn,

    "INSERT INTO suppliers
    (supplier_name,phone)

    VALUES

    ('$name','$phone')");
}

?>

<link rel="stylesheet"
href="../css/style.css">

<div class="form-box">

<h2>Add Supplier</h2>

<form method="POST">

<input type="text"
name="name"
placeholder="Supplier Name"
required>

<input type="text"
name="phone"
placeholder="Phone"
required>

<button name="save">

Save Supplier

</button>

</form>

<br>

<a href="../dashboard.php"
class="back-btn">

Back

</a>

</div>