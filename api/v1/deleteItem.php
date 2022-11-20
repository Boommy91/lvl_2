<?php
$db_handle = require './getItem.php' ;
mysqli_select_db($db_handle, "todo");
$sql = "DELETE FROM items WHERE id={$_POST['id']}";
$result = mysqli_query($db_handle, $sql);

