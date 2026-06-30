<?php
header("Content-Type: application/json");

$data = [
    "success" => true,
    "tips" => [
        "Practice coding daily.",
        "Read documentation.",
        "Build small projects.",
        "Debug your code carefully.",
        "Never stop learning."
    ]
];

echo json_encode($data);
?>
