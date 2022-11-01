<?php
$file = json_decode(file_get_contents('itemsStorage.json'));
var_dump($file[$_GET['id']]);
