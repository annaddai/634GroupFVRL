<!DOCTYPE html>
<html lang="en">

<?php
require 'header.php'; ?>

<head>
    <meta charset="UTF-8">
    <title>My Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/myaccount.css">
</head>


<body>
<!-- php connection -->
<?php

require 'database.php';

?>

<!-- My Shelf Section -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">



<!-- message (add&remove) -->
<div class='message'>
<?php
session_start();
if (isset($_SESSION['message'])) {
    echo "<p>" . $_SESSION['message'] . "</p>";
    unset($_SESSION['message']);
}
?>
</div>

<div class='card-shelf'>
<h5 class='myshelf-title'>My Shelf</h5>

<?php

require 'database.php';

try {
    $stmt = $conn->prepare("SELECT * FROM available_books");
    $stmt->execute();
    $availableBooks = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
    <!-- add to shelf -->
<form action="add_to_shelf.php" method="post">
    <label for="book">Add a book to your shelf:</label>
    <select name="book_id" id="book">
        <?php foreach ($availableBooks as $book) { ?>
            <option value="<?php echo $book['id']; ?>">
                <?php echo htmlspecialchars($book['book_name']); ?>
            </option>
        <?php } ?>
    </select>
    <input type="submit" value="Add to Shelf">
</form>

<?php
require 'database.php';

try {
    $shelfStmt = $conn->prepare("SELECT shelf.id as shelf_id, books.* FROM shelf JOIN available_books as books ON shelf.book_id = books.id");
    $shelfStmt->execute();
    $shelfBooks = $shelfStmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}   
// display books
echo "<div class='shelf-books'>";
foreach ($shelfBooks as $book) {
    echo "<div class='shelf-book-item'>";
    echo "<img src='" . htmlspecialchars($book['book_cover']) . "' alt='Book Cover' class='shelf-book-cover'/>";
    echo "<div class='shelf-book-title'>" . htmlspecialchars($book['book_name']) . "</div>";
    echo "<div class='shelf-book-author'>by " . htmlspecialchars($book['author']) . "</div>";
    // remove button
    echo "<form action='remove_from_shelf.php' method='post'>";
    echo "<input type='hidden' name='shelf_id' value='" . $book['shelf_id'] . "' />";
    echo "<input type='submit' value='Remove from Shelf'>";
    echo "</form>";
    echo "</div>";
}
echo "</div>";
?>
</div>
</div>





<!-- User Profile Section -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://web.litguide.ca/client/assets/media/svg/avatars/001-boy.svg" class="card-img-profile" alt="User Avatar" >
                    <div class="card-body text-center">
                        <h5 class="card-title">@username_123</h5>
                        <br>
                        <p class="card-text"><ins>View Profile</ins></p>
                        <p class="card-text"><ins>View Library Card</ins></p>
                        <p class="card-text"><ins>Activity</ins></p>
                        <p class="card-text"><ins>Settings</ins></p>
                    </div>
                </div>
            </div>
    </div>
</div>



<div class="book-shelf">
<div class="grid-container">
    <?php
    
    foreach ($books as $book) {
        echo "<div class='book'>";
        echo "<h2>" . $book['title'] . "</h2>";
        echo "<p>" . $book['author'] . "</p>";


        echo "<form action='remove_from_shelf.php' method='post'>";
        echo "<input type='hidden' name='shelf_id' value='" . $book['shelf_id'] . "' />";
        echo "<button type='submit' class='btn btn-danger btn-sm'>Remove from Shelf</button>";
        echo "</form>";

        echo "</div>";
    }
    ?>
</div>
</div>


<!-- checked out and on holds -->



<?php
require 'database.php';

try {
    $stmtCheckedOut = $conn->prepare("SELECT * FROM checked_out");
    $stmtCheckedOut->execute();
    $checkedOutBooks = $stmtCheckedOut->fetchAll(PDO::FETCH_ASSOC);

    $stmtHolds = $conn->prepare("SELECT * FROM holds");
    $stmtHolds->execute();
    $booksOnHold = $stmtHolds->fetchAll(PDO::FETCH_ASSOC);

} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>

<div class='checked-out-books'>
    <h2>Checked Out</h2>
    <div class='book-container'>
        <?php
        foreach ($checkedOutBooks as $book) {
            echo "<div class='book-item'>";
            echo "<img src='" . htmlspecialchars($book['book_cover']) . "' alt='Book Cover' class='book-cover'/>";
            echo "<div class='book-title'>" . htmlspecialchars($book['book_name']) . "</div>";
            echo "<div class='book-author'>by " . htmlspecialchars($book['author']) . "</div>";
            echo "</div>";
        }
        ?>
    </div>
</div>

<div class='books-on-hold'>
    <h2>On Hold</h2>
    <div class='book-container'>
        <?php
        foreach ($booksOnHold as $book) {
            echo "<div class='book-item'>";
            echo "<img src='" . htmlspecialchars($book['book_cover']) . "' alt='Book Cover' class='book-cover' />";
            echo "<div class='book-title'>" . htmlspecialchars($book['book_name']) . "</div>";
            echo "<div class='book-author'>by " . htmlspecialchars($book['author']) . "</div>";
            echo "</div>";
        }
        ?>
    </div>
</div>


<?php
require 'footer.php'; ?>

</body>
</html>
