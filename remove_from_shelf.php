<?php

require 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $shelfId = $_POST['shelf_id'];

    try {
        $deleteStmt = $conn->prepare("DELETE FROM shelf WHERE id = :shelfId");
        $deleteStmt->execute(['shelfId' => $shelfId]);

        session_start();
        $_SESSION['message'] = "Book removed from shelf.";
    } catch(PDOException $e) {
        die("Error: " . $e->getMessage());
    }
  
    header("Location: myaccount.php");
    exit();
}
?>
