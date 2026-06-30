<?php
header("Content-Type: application/json");

$name = isset($_GET['name']) ? $_GET['name'] : "Guest";

$response = [
    "success" => true,
    "message" => "Hello, " . $name . "! Welcome to Mini API."
];

echo json_encode($response);
?>
