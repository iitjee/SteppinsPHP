



<ul>
<?php while($row = mysqli_fetch_assoc($result)) { ?>
<li> <?php echo $row["column_name"] ?> </li>
<?php } ?>





