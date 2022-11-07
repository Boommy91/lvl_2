<?php
if ($_POST['text'] != null) {
    $storage = json_decode(file_get_contents('storage.json'), true);
    $id = sizeof($storage['items']);
    $storage['items'][] = ["id" => $id, "text" => $_POST['text'], "checked" => true];
    echo $id;
    file_put_contents('storage.json', json_encode($storage));
}
