<?php
$storage = json_decode(file_get_contents('storage.json'), true);

if ($_POST['id'] < sizeof($storage['items'])) {

    $id = 0;
    foreach ($storage['items'] as $val) {
        if ($val['id'] != $_POST['id']) {
            $storage['items'][$id] = $val;
            $id++;
        }
    }
    unset($storage['items'][sizeof($storage['items']) - 1]);
    file_put_contents('storage.json', json_encode($storage));
}

