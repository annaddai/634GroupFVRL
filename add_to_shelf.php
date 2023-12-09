<?php

require 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bookId = $_POST['book_id'];

    try {  
        
        $checkStmt = $conn->prepare("SELECT * FROM shelf WHERE book_id = :bookId");
        $checkStmt->execute(['bookId' => $bookId]);
        
        if ($checkStmt->rowCount() == 0) {
            
            $insertStmt = $conn->prepare("INSERT INTO shelf (book_id) VALUES (:bookId)");
            $insertStmt->execute(['bookId' => $bookId]);
            
            session_start();
            $_SESSION['message'] = "Book added to shelf.";
        } else {
            session_start();
            $_SESSION['message'] = "This book is already on your shelf.";
        }
    } catch(PDOException $e) {
        die("Error: " . $e->getMessage());
    }
    
    header("Location: myaccount.php");
    exit();
}
?>
