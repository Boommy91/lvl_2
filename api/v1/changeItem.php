<?php
$db_handle = require './getItem.php' ;
mysqli_select_db($db_handle, "todo");
$sql = "UPDATE items SET text='{$_POST['text']}', checked={$_POST['checked']} WHERE id={$_POST['id']}";
$result = mysqli_query($db_handle, $sql);