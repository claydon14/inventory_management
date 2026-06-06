<?php

include("../config/db.php");

$id=$_GET['id'];

mysqli_query(
$conn,
"DELETE FROM products
WHERE product_id=$id"
);

header("Location:view.php");

?>