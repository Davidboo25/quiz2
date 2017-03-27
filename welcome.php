<?php
include 'register.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="mycss.css" rel="stylesheet">
    </head>
    <Title>
        PHP Quiz2
    </Title>
    <!-- Start Nav -->
    <nav class="nav">
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
            </ul>
    </nav>
    <!-- End Nav -->
    <!-- Start Body -->
    <body>
        <div class="mainformdiv">
        <h1> SIGNUP FOR THE HOTTEST MIXTAPE OF 2017<h1>
        <h5> -insert airhorn sound here-</h5>
            <form class="mainform" id ="mainform" action = "welcome.php" method="post">
              First Name:
              </br>
              <input type="text" name="firstname" value="John" id="firstname"><br>
              Last Name:
              </br>
              <input type="text" name="lastname" value="Same" id="lastname"><br>
              Email Address:
              </br>
              <input type="email" name="email" value="Same@same.net" id="email"><br>
              </br>
              <input class="submitbutton" type="submit" value="Submit"></input>
            
            </form> 
            <?php
                // Display the saved cookie to the user here.
                cookie();
            ?>
        </div>
    </body>
    <!-- End Body -->
    <!-- Start Footer -->
    <footer class="footerFinal">
      <div class = "centerfoot">
        <p> 
          Thanks for comming!
        </p>
      </div>
    </footer>
    <!-- End Footer -->