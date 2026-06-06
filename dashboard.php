<?php
session_start();

if(!isset($_SESSION['admin']))
{
    header("Location:index.php");
}
?>

<link rel="stylesheet" href="css/style.css">

<div class="menu">

<a href="dashboard.php">Dashboard</a>

<a href="suppliers/add.php">Add Supplier</a>

<a href="suppliers/view.php">View Suppliers</a>

<a href="products/add.php">Add Product</a>

<a href="products/view.php">View Products</a>

<a href="logout.php">Logout</a>

</div>

<div class="container">

<h1>Inventory Management System</h1>

<h3>Welcome <?php echo $_SESSION['admin']; ?></h3>

</div>