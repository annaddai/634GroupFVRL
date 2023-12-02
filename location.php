<!DOCTYPE html>
<html lang="en">

<?php
require 'header.php'; ?>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fraser Valley Regional Library Locations</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
<style>
    body {
    background: #f8f9fa;
    font-family: 'Open Sans', sans-serif;
    }
    .search-box {
    padding: 15px;
    margin-bottom: 30px;
    background: #fff;
    border-radius: 5px;
    }
    .search-bar {
        width: 100%;
        padding: 10px;
        margin-bottom: 5px;
        border: 2px solid #ddd;
        border-radius: 5px;
    }
    .library-section {
        background: #fff;
        border-radius: 5px;
        padding: 20px;
    }
    .library-title {
        color: #65cdc4;
        font-size: 24px;
        margin-bottom: 15px;
    }
    .library-address {
        font-size: 16px;
        margin-bottom: 15px;
    }
    .library-hours, .library-facilities {
        font-size: 12px;
    }
    .library-facilities ul {
        columns: 2;
        -webkit-columns: 2;
        -moz-columns: 2;
    }
    h3 {
    color: #333;
    }
    ul li {
    padding-bottom: 5px;
    }
    .address {
    white-space: pre-line;
    }
    .img-fluid {
    object-fit: cover;
    }
    .administrative-centre {
    background: white;
    padding: 15px;
    margin-top: 20px;
    }

</style>
</head>
<body>


  <div class="container mt-4">
    <!-- Library Locations Section -->
    <div class="row">
      <!-- Location Details Column -->
      <div class="col-md-6">
        
            <!-- Search Box -->
            <div class="search-box">
              <input type="text" class="search-bar" placeholder="Search Locations">
            </div>
            <!-- Library Section -->
            <div class="library-section">
              <!-- Library Title -->
              <div class="library-title">Abbotsford Community Library</div>
              <!-- Library Address -->
              <div class="library-address">
                33355 Bevan Avenue,<br>
                Abbotsford, BC, V2S0E7
              </div>
              <!-- Library Hours -->
              <div class="library-hours mb-4">
                <strong>Hours:</strong><br>
                Monday: 9:00 am ~ 8:00 pm<br>
                Tuesday: 9:00 am ~ 8:00 pm<br>
                Wednesday: 9:00 am ~ 8:00 pm<br>
                Thursday: 9:00 am ~ 8:00 pm<br>
                Friday: 10:00 am ~ 5:00 pm<br>
                Saturday: 10:00 am ~ 5:00 pm<br>
                Sunday: 10:00 am ~ 5:00 pm
              </div>
              <!-- Library Facilities -->
              <div class="library-facilities">
                <strong>Facilities:</strong>
                <ul>
                  <li>24 Hour Book Drop</li>
                  <li>Accessible</li>
                  <li>B&W Copying/Printing</li>
                  <li>Colour Copying/Printing</li>
                  <li>Outdoor Bike Rack</li>
                  <li>Public Internet Stations</li>
                  <li>Self Check-In Book Drop</li>
                  <li>Self Check-Out</li>
                  <li>WiFi</li>
                </ul>
              </div>
            </div>
      </div>



      <!-- Map Column -->
      <div class="col-md-6">
        <!-- Static Map Image -->
        <br>
        <br>
        <img src="https://www.worldatlas.com/upload/56/1d/c7/british-columbia-administrative-map.png" alt="Map" class="img-fluid" width="800px" height="800px">
      </div>
    </div>
    <!-- Administrative Centre Section -->
    <div class="administrative-centre mt-4">
      <h3>Administrative Centre</h3>
      <p>The Fraser Valley Regional Library Administrative Centre provides administrative, library collections, IT and van delivery services to our 25 libraries in the 15 member municipalities.</p>
      <!-- Outreach Services -->
      <p> <span style="color:#65cdc4">Outreach Services</span> (Audiobook Service and Library for You) are also located here.</p>
      <!-- Contact Information -->
      <h5>Contact:</h5>
      <address>
        34589 DeLair Rd.<br>Abbotsford, BC<br>Canada V2S 5Y1<br>
        Telephone: (604) 859-7141<br>
        Fax: (604) 852-5701
      </address>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
