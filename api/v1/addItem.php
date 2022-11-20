<?php
$db_handle = require './getItem.php' ;
mysqli_select_db($db_handle, "todo");
$sql = "INSERT INTO items (text,checked) VALUES ('{$_POST['text']}',false)";
mysqli_query($db_handle, $sql);


