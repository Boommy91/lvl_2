<?php
$value = $_POST['val'];
file_put_contents('api/text.txt',$value);
var_dump($value);