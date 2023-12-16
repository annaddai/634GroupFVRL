<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="Assets/css/normalize_css.css" />
    <link rel="stylesheet" href="Assets/css/Books_Media.css">
    <title>Fraser Valley Regional Library Books & Media</title>
  </head>

  <body>
    <!-- Header -->
    <?php require 'header.php'; ?>
    <!-- Books,Ebooks,Audiobooks Section -->
    <div class="section1">
      <!-- Section Header -->
      <h3>Books, Ebooks, Audiobooks</h3>
      <!-- Tab nav -->
      <div class="SectionTabs">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active"
              id="Books-tab"
              data-bs-toggle="tab"
              data-bs-target="#home-tab-pane"
              type="button"
              role="tab"
              aria-controls="home-tab-pane"
              aria-selected="true"
            >
              Books
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="Ebooks-tab"
              data-bs-toggle="tab"
              data-bs-target="#profile-tab-pane"
              type="button"
              role="tab"
              aria-controls="profile-tab-pane"
              aria-selected="false"
            >
              Ebooks
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="Audiobooks-tab"
              data-bs-toggle="tab"
              data-bs-target="#contact-tab-pane"
              type="button"
              role="tab"
              aria-controls="contact-tab-pane"
              aria-selected="false"
            >
              Audiobooks
            </button>
          </li>
        </ul>
      </div>
      <!-- Tab Contents -->
      <div class="tab-content" id="myTabContent">
        <div
          class="tab-pane fade show active"
          id="home-tab-pane"
          role="tabpanel"
          aria-labelledby="home-tab"
          tabindex="0"
        >
          <img
            src="https://www.syndetics.com/index.aspx?isbn=9781324065401&issn=/LC.JPG&client=sepup&type=xw12"
            alt="Dayswork, Book, 2023"
          />
          <img
            src="https://www.syndetics.com/index.aspx?isbn=9781982153083&issn=/LC.JPG&client=sepup&type=xw12&oclc=1335121846"
            alt="Big Swiss, Book, 2023"
          />
          <img
            src="https://www.syndetics.com/index.aspx?isbn=9780062885548&issn=/LC.JPG&client=sepup&type=xw12&oclc=1373777322"
            alt="School trip, Book, 2023"
          />
          <img
            src="https://www.syndetics.com/index.aspx?isbn=9780316421843&issn=/LC.JPG&client=sepup&type=xw12"
            alt="Age of Ash, Book, 2022"
          />
          <p class="Title1">Dayswork</p>
          <p class="Title2">Big Swiss</p>
          <p class="Title3">School Trip</p>
          <p class="Title4">Age of Ash</p>
          <p class="Author1">Bachelder, Chris</p>
          <p class="Author2">Beagin, Jen</p>
          <p class="Author3">Craft, Jerry</p>
          <p class="Author4">Abraham, Daniel</p>
        </div>
        <div
          class="tab-pane fade"
          id="profile-tab-pane"
          role="tabpanel"
          aria-labelledby="profile-tab"
          tabindex="0"
        >
          <img
            src="https://www.syndetics.com/index.aspx?isbn=9781324065401&issn=/LC.JPG&client=sepup&type=xw12"
            alt="Dayswork, EBook, 2023"
          />
          <img
            src="https://www.syndetics.com/index.aspx?isbn=9781982153083&issn=/LC.JPG&client=sepup&type=xw12&oclc=1335121846"
            alt="Big Swiss, EBook, 2023"
          />
          <img
            src="https://www.syndetics.com/index.aspx?isbn=9780062885548&issn=/LC.JPG&client=sepup&type=xw12&oclc=1373777322"
            alt="School trip, EBook, 2023"
          />
          <img
            src="https://www.syndetics.com/index.aspx?isbn=9780316421843&issn=/LC.JPG&client=sepup&type=xw12"
            alt="Age of Ash, EBook, 2022"
          />
          <p class="Title1">Dayswork</p>
          <p class="Title2">Big Swiss</p>
          <p class="Title3">School Trip</p>
          <p class="Title4">Age of Ash</p>
          <p class="Author1">Bachelder, Chris</p>
          <p class="Author2">Beagin, Jen</p>
          <p class="Author3">Craft, Jerry</p>
          <p class="Author4">Abraham, Daniel</p>
        </div>
        <div
          class="tab-pane fade"
          id="contact-tab-pane"
          role="tabpanel"
          aria-labelledby="contact-tab"
          tabindex="0"
        >
          <img
            src="https://www.syndetics.com/index.aspx?isbn=9781324065401&issn=/LC.JPG&client=sepup&type=xw12"
            alt="Dayswork, Audiobook, 2023"
          />
          <img
            src="https://www.syndetics.com/index.aspx?isbn=9781982153083&issn=/LC.JPG&client=sepup&type=xw12&oclc=1335121846"
            alt="Big Swiss, Audiobook, 2023"
          />
          <img
            src="https://www.syndetics.com/index.aspx?isbn=9780062885548&issn=/LC.JPG&client=sepup&type=xw12&oclc=1373777322"
            alt="School trip, Audiobook, 2023"
          />
          <img
            src="https://www.syndetics.com/index.aspx?isbn=9780316421843&issn=/LC.JPG&client=sepup&type=xw12"
            alt="Age of Ash, Audiobook, 2022"
          />
          <p class="Title1">Dayswork</p>
          <p class="Title2">Big Swiss</p>
          <p class="Title3">School Trip</p>
          <p class="Title4">Age of Ash</p>
          <p class="Author1">Bachelder, Chris</p>
          <p class="Author2">Beagin, Jen</p>
          <p class="Author3">Craft, Jerry</p>
          <p class="Author4">Abraham, Daniel</p>
        </div>
      </div>
    </div>


    <!-- Staff's Picks Section -->
    <div class="section2">
        <!-- Section Header -->
        <h3>Staff's Picks</h3>
        <br>
        <!-- Connect Database -->
        <?php
        require_once 'database_yuanxi.php';

        ?>
        <!-- Carousel Slider -->
        <div class="carousel-item active">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <!--Fetch data by using load.php -->
                        <?php 
                        //Extracting data from the database for matching
                        require 'database_yuanxi.php'; //load credentials  
                        $query="SELECT * FROM `BookInfo`"; //creating query
                        $query_exc = $conn->query($query);
                        while($results= $query_exc->fetch(PDO::FETCH_ASSOC)){  //executing query to save results in $results ?>
                            <tr>
                                <td scope="col"><?php echo $results['book_title'];?></td>
                                <td scope="col"><?php echo $results['book_author'];?></td>
                                <td scope="col"><?php echo $results['book_date'];?></td>
                                <td scope="col"><?php echo $results['book_intro'];?></td>
                            </tr>

                        <?php } 
                        ?>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="..." class="carouselimages" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="carouselimages" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="carouselimages" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>                
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php require 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>





