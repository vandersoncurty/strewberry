<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $instagram = $_POST["instagram"];
    $description = $_POST["description"];
    $rules = $_POST["rules"];
    $event_date = $_POST["event_date"];
    $final_date = $_POST["final_date"];
    $max_competitors = $_POST["max_competitors"];

    $stmt = $conn->prepare("INSERT INTO Staff (email, permission) VALUES (?, ?)");

    for( $i = 0; $i < count($emails); $i++ ) {
        $email = $emails[$i];
        $permission = isset($permissions[$i]) ? $permissions[$i] : '';

        $stmt->bind_param('ss', $email, $permission);
        $stmt->execute();
    }
    $stmt->close();
    $conn->close();

    header("Location: inicio.php");
    exit();
}
?>