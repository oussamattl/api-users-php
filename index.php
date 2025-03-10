<?php
header("Content-Type: application/json");

require_once "config.php";
require_once "users.php";

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "GET") {
    echo json_encode(getUsers());
} elseif ($method == "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    echo json_encode(addUser($data));
}
?>
