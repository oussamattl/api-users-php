<?php
require_once "config.php";

function getUsers() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM users");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addUser($data) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->execute([$data["name"], $data["email"]]);
    return ["message" => "User added"];
}
?>
