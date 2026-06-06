<?php

include("../config/db.php");

$result=mysqli_query(
$conn,
"SELECT * FROM suppliers"
);

?>

<link rel="stylesheet"
href="../css/style.css">

<table class="product-table">

<tr>

<th>ID</th>
<th>Supplier Name</th>
<th>Phone</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['supplier_id']; ?></td>

<td><?php echo $row['supplier_name']; ?></td>

<td><?php echo $row['phone']; ?></td>

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