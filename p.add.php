<?php

include("../config/db.php");

$suppliers=mysqli_query(
$conn,
"SELECT * FROM suppliers"
);

if(isset($_POST['save']))
{
    $name=$_POST['name'];
    $category=$_POST['category'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $supplier=$_POST['supplier'];

    mysqli_query($conn,

    "INSERT INTO products
    (product_name,category,price,quantity,supplier_id)

    VALUES

    ('$name','$category',
    '$price','$quantity',
    '$supplier')");
}

?>

<link rel="stylesheet"
href="../css/style.css">

<div class="form-box">

<h2>Add Product</h2>

<form method="POST">

<input type="text"
name="name"
placeholder="Product Name"
required>

<input type="text"
name="category"
placeholder="Category"
required>

<input type="number"
step="0.01"
name="price"
placeholder="Price"
required>

<input type="number"
name="quantity"
placeholder="Quantity"
required>

<select name="supplier" required>

<option value="">
Select Supplier
</option>

<?php

while($row=mysqli_fetch_assoc($suppliers))
{
?>

<option value="<?php echo $row['supplier_id']; ?>">

<?php echo $row['supplier_name']; ?>

</option>

<?php
}
?>

</select>

<button name="save">

Save Product

</button>

</form>

<br>

<a href="../dashboard.php"
class="back-btn">

Back

</a>

</div>