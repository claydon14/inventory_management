<?php

include("../config/db.php");

$result=mysqli_query($conn,

"SELECT
products.product_id,
products.product_name,
products.category,
products.price,
products.quantity,
suppliers.supplier_name

FROM products

INNER JOIN suppliers

ON products.supplier_id =
suppliers.supplier_id");

?>

<link rel="stylesheet"
href="../css/style.css">

<table class="product-table">

<tr>

<th>ID</th>
<th>Product</th>
<th>Category</th>
<th>Price</th>
<th>Quantity</th>
<th>Supplier</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['product_id']; ?></td>

<td><?php echo $row['product_name']; ?></td>

<td><?php echo $row['category']; ?></td>

<td><?php echo $row['price']; ?></td>

<td><?php echo $row['quantity']; ?></td>

<td><?php echo $row['supplier_name']; ?></td>

</tr>

<?php
}
?>

</table>
<br>

<a href="../dashboard.php"
class="back-btn">

Back

</a>