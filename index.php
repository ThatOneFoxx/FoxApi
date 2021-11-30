<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$files = glob('../images/*');
if ($files) {
    $index = rand(1, $Number);

    $image_path = '';
    $link = ';
} else {
    $image_path = null;
    $link = null;
}
$data = ['image' => $image_path, 'link' => $link];

echo json_encode($data);
