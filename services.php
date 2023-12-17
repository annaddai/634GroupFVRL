<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="Assets/css/normalize_css.css" />
    <link rel="stylesheet" href="Assets/css/Service.css">
    <title>Fraser Valley Regional Library Service</title>
</head>
<body>
    <!-- Header -->
    <?php require 'header.php'; ?>
    
    <?php
    /* Line 6-37 is used to update the database. INSERT NEW ROW*/

    require 'database_yuanxi.php'; //load credentials 

    /*Step 1: Create a variable to record success or error message on execution of query.
    See Step 4 below to relate to this step 1. */ 
    $message="";

    //Step 2: Check if email is submitted using POST method on form. 
    if(!empty($_POST['uemail'])){ 

        //Step 3: Save SQL query to a variable 
        $query = "INSERT INTO UserInfo (id, fname, lname, uphone, uemail, umessage) VALUES (NULL, '".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['uphone']."', '".$_POST['uemail']."', '".$_POST['umessage']."')";
        
        //Step 3: Preparing query below
        $stmt = $conn->prepare($query);
        
        //Step 4: Execute the query to update the database. If else for if the query doesn't work. This is called error handling. Message will be saved in $message variable.
        if( $stmt->execute() ){ 

            //Message to show account was created
            $message="Form Submitted"; 

        } else {

            //Message to show error in creating account 
              $message="Error was encountered in submitting form"; 
          }
        }
        
    ?>
      
            <!--Container here to organize the sign-in box -->
                    <div class="container">
                        <div class="row">
                            <div class="col-10 mx-auto">
                        <main class="form-signin w-100 m-auto" "> 
                        <form action="#" method="POST" id="signupform"> <!--Add action to refresh page using # & define method as POST" -->

                            <!-- Heading and form introduction -->
                            <h3 class="heading1">Book a Libarian</h3>
                            <p class="formintro">
                            Complete the form to request an in-person or online appointment and a library staff member will contact you to set a time or to let you know about other available services that may better meet your needs. We will make every effort to respond to you within 48 hours (depending upon the business hours of the library you select).If you need immediate assistance, please call or visit your closest FVRL location during regular business hours.
                            </p>

                            <!-- Heading of Form and its explanation -->
                            <h4 class="heading2">Request and Appointment</h4>
                            <P class="formexp">Get in touch with us using the form below.</P>

                            <div class="containfloat">
                              <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Yuanxi" name="fname"><!--Define Name of input type -->
                                <label for="floatingInput">First Name</label>
                              </div>
                              <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Liu" name="lname"><!--Define Name of input type -->
                                <label for="floatingInput">Last Name</label>
                              </div>
                              <div class="form-floating">
                                <input type="number" class="form-control" id="floatingInput" placeholder="1231231234" name="uphone" required><!--Define Name of input type -->
                                <label for="floatingInput">Phone Number</label>
                              </div>
                              <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="uemail" required><!--Define Name of input type -->
                                <label for="floatingInput">Email address</label>
                              </div>
                              <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="This is final assignment submission of Yuanxi" name="umessage"><!--Define Name of input type -->
                                <label for="floatingInput">Message</label>
                              </div>
                            </div>
                          
                            
                            <?php echo "<p>".$message."</p>";?>
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
                            <p class="mt-5 mb-3 text-muted">&copy; 2017–2023</p>
                        </form>
                        </main>

                            </div>
                        </div>
                    </div>
    <!-- Footer -->
    <?php require 'footer.php'; ?>
</body>
</html>
