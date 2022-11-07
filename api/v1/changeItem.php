<?php
$storage = json_decode(file_get_contents('storage.json'), true);
$storage['items'][$_POST['id']] = ["id" => $_POST['id'], "text" => $_POST['text'], "checked" => $_POST['checked']];
file_put_contents('storage.json', json_encode($storage));
