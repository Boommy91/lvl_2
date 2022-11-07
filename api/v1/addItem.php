<?php
if ($_POST['val'] != null) {
    $id = file_get_contents('id.txt');

    $storage = json_decode(file_get_contents('storage.json'), true);
    $storage['items'][] = ["id" => $id, "text" => $_POST['val'], "checked" => true];

    file_put_contents('storage.json', json_encode($storage));
    file_put_contents('id.txt', ++$id);
}
