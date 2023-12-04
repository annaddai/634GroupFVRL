<!DOCTYPE html>
<html lang="en">

<?php
require 'header.php'; ?>

<head>
    <meta charset="UTF-8">
    <title>My Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin-bottom: 20px;
        }

        .card-deck .card {
            flex: 1 0 auto;
        }

        .card-img-top {
            height: 150px;
            object-fit: cover; 
            width: 100%;
            border-radius: 0; 
        }

        .card-body {
            background-color: #f8f9fa;
        }

        .card-title {
            color: #333;
        }

        .card-text {
            color: #666;
        }

        .card-img-profile {
            width: 100px;
            height: 100px;
            border-radius: 50%; 
            margin: 20px auto; 
        }
    </style>
</head>


<body>


<div class="container mt-4">
    <div class="row">
            <!-- My Shelf Content -->
            <div class="col-md-8">
                <!-- My Shelf Content -->  
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



<?php 

$con = mysqli_connect("localhost", "root", "Daiyq0623!", "myaccount", 8889);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

function getBooks($con, $table) {
    $result = mysqli_query($con, "SELECT * FROM $table");
    if(!$result) {
        echo "Error fetching books: " . mysqli_error($con);
        return [];
    }
    $books = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $books;
}
        
$checkedOutBooks = getBooks($con, 'checked_out');
$holdsBooks = getBooks($con, 'holds');
?>

<div class="container mt-4">
    <div class="row">
        <!-- Checked Out Section -->
        <div class="col-md-6">
            <h3>Checked Out</h3>
            <div class="card-deck">
                <?php foreach ($checkedOutBooks as $book): ?>
                    <div class="card">
                        <img src="<?= htmlspecialchars($book['book_cover']) ?>" class="card-img-top" alt="<?= htmlspecialchars($book['book_name']) ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($book['book_name']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($book['author']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div> 

        <!-- On Holds Section -->
        <div class="col-md-6">
            <h3>On Holds</h3>
            <div class="card-deck">
                <?php foreach ($holdsBooks as $book): ?>
                    <div class="card">
                        <img src="<?= htmlspecialchars($book['book_cover']) ?>" class="card-img-top" alt="<?= htmlspecialchars($book['book_name']) ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($book['book_name']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($book['author']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


<?php
require 'footer.php'; ?>

</body>
</html>
