<?php

$db = require __DIR__ . "/connection.php";

$sql = sprintf("SELECT * FROM user
                WHERE email = '%s'",
                $db->real_escape_string($_GET["email"]));
                
$result = $db->query($sql);

$is_available = $result->num_rows === 0;

header("Content-Type: application/json");

echo json_encode(["available" => $is_available]);
?>