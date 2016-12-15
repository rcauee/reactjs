<?php

# read data json
$dataStr = file_get_contents('data.json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // has new data

    $data = json_decode($dataStr);

    $obj = new stdClass();
    $obj->id = time();
    $obj->author = $_POST['author'];
    $obj->text = $_POST['text'];

    $data[] = clone $obj;
    $dataStr = json_encode($data);

    $fp = fopen('data.json', 'w');
    fwrite($fp, $dataStr);
    fclose($fp);
}

echo $dataStr;
