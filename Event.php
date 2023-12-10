
<!DOCTYPE html>
<html>

<?php
require 'header.php'; ?>

<head>
    <title>Your Webpage</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: white;
            width: 1440px;
            height: 1810px;
            font-family: 'Open Sans', sans-serif;
        }

        .event {
            position: absolute;
            top: 257px;
            left: 88px;
            width: 210px;
            height: 78px;
            font-size: 36px;
            font-weight: bold;
            color: black;
        }

        .search-box {
            position: absolute;
            top: 273px;
            left: 279.45px;
            width: 873.38px;
            height: 134.63px;
            background-color: #D9D9D9;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
        }

        .search-bar {
            width: 80%;
            height: 48px;
            border-radius: 5px;
            border: none;
            padding: 10px;
        }

        .options {
            position: absolute;
            bottom: 15px;
            right: 15px;
            display: flex;
            align-items: center;
        }

        .option {
            color: black;
            font-size: 15px;
            display: flex;
            align-items: center;
            margin-right: 10px;
        }

        .circle {
            display: inline-block;
            width: 15px;
            height: 15px;
            border: 2px solid #65CDC4;
            border-radius: 50%;
            margin-right: 5px;
        }

        .image-container {
            position: absolute;
            top: 450px;
            left: 279.45px;
            width: 873.38px;
            height: auto;
        }

        .image-container img {
            width: 100%;
            height: auto;
        }

        .text-container {
            position: absolute;
            top: 1100px;
            left: 279.45px;
            display: flex;
            align-items: center;
        }

        .community-text, .library-text {
            font-size: 36px;
            margin-right: 20px;
        }

        .community-text {
            color: #00BABA;
        }

        .library-text {
            color: black;
            font-weight: normal;
        }

        .additional-image {
            position: absolute;
            top: 1200px;
            left: 279.45px;
            width: 528px;
            height: 172px;
        }

        .additional-image img {
            width: 100%;
            height: auto;
        }

        .text-after-additional-image {
            position: absolute;
            top: 1500px; /* Adjust based on the additional image's height */
            left: 279.45px;
            display: flex;
            align-items: center;
        }

        .dinovember-text-after {
            font-size: 36px;
            color: #00BABA;
            margin-right: 20px;
        }

        .pioneer-library-text-after {
            font-size: 36px;
            color: black;
        }

        .second-additional-image {
            position: absolute;
            top: 1600px; /* Adjust based on the text line's height */
            left: 279.45px;
            width: 528px;
            height: 172px;
        }

        .second-additional-image img {
            width: 100%;
            height: auto;
        }

        .time-text {
            position: absolute;
            top: 1200px;
            left: 840px; /* Adjust based on image width */
            font-size: 25px;
            color: black;
        }

        .second-time-text {
            position: absolute;
            top: 1600px; /* Adjust based on the second additional image's height */
            left: 840px; /* Adjust based on image width */
            font-size: 25px;
            color: black;

       
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>

<?php 

$con = mysqli_connect("127.0.0.1", "root", "Zjsyn98700526..", "Event", 3306);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

function getevents($con, $table) {
    $result = mysqli_query($con, "SELECT * FROM $table");
    if(!$result) {
        echo "Error fetching books: " . mysqli_error($con);
        return [];
    }
    $events = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $events;
}
        
$events = getevents($con, 'events');


?>


<body>
<div class="event">
<details ontoggle="myFunction()">
   <summary>Event</summary>
    
    <?php foreach ($events as $event): ?>
                    <div class="scrollableList">
                        
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($event['event_name']) ?></h5>

                            <p class="card-text"><?= htmlspecialchars($event['starttime']) ?></p>
                            <p class="card-text"><?= htmlspecialchars($event['endtime']) ?></p>
                            <p class="card-text"><?= htmlspecialchars($event['Dates']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?></div>
</details>
<script>
function myFunction() {
  //alert("The ontoggle event occured");
}
</script>
    <div class="search-box">
        <input type="text" class="search-bar" placeholder="Search...">
        <div class="options">
            <div class="option">
                <span class="circle"></span>Online
            </div>
            <div class="option">
                <span class="circle"></span>Location
            </div>
        </div>
    </div>
    <div class="image-container">
        <img src="Assets/img/calender.jpg" alt="Description of the image">
    </div>
    <div class="text-container">
        <div class="community-text">
            Weave a Community
        </div>
        <div class="library-text">
            Agassiz Library
        </div>
    </div>
    <div class="additional-image">
        <img src="Assets/img/weave.jpg" alt="Description of the additional image">
    </div>
    <div class="text-after-additional-image">
        <div class="dinovember-text-after">
            Dinovember
        </div>
        <div class="pioneer-library-text-after">
            Ladner Pioneer Library
        </div>
    </div>
    <div class="second-additional-image">
        <img src="Assets/img/dinovember.jpg" alt="Description of the second additional image">
    </div>
    <div class="time-text">
        Time: All day, Tuesday, October 03 to Friday, December 22
    </div>
    <div class="second-time-text">
        Time: All day, Wednesday, November 01 to Thursday, November 30
    </div>
</body>
</html>




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
require 'footer.php'; ?>

</body>
</html>






