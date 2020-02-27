<!DOCTYPE html>
<html lang="en">

<?php
    require 'php/database.php';
    include 'php/postEvent.php';
?>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Game of Apps</title>
    <!-- Link to CSS file -->
   <link href="css/main.css" type="text/css" rel="stylesheet">
</head>

<body id="page-top" onload="ClearInput()">
    <!-- Nav Bar -->
    <nav id="navbar" class="sticky">
        <div class="navbar-cont">
            <a href="#page-top" class="navbar-logo"><img id="logo" src="img/goa-logo.png"></a>
            <ul class="nav-item-cont">
                <li class="nav-item"><a href="#page-top" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#events" class="nav-link">Events</a></li>
                <li class="nav-item"><a href="#donate" class="nav-link">Donate</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                <!-- <li class="nav-item"><a href="#" class="nav-link btn-small" onclick="ShowLoginModal()">Login</a></li> -->
                <?php
                    if(isset($_POST['username'])){
                        echo '<li class="nav-item"><span id="nav-username">'.$_POST['username'].'</span></li>';
                    }else{
                        echo '<li class="nav-item"><a href="#" class="nav-link btn-small" onclick="ShowLoginModal()">Login</a></li>';
                    }
                ?>
            </ul>
        </div>
    </nav>

    <!-- Login Modal -->
    <div id="login-modal" class="modal">
        <!-- Modal Content -->
        <form action="" method="POST" class="modal-content animateZoom">
            <div class="modal-image">
                <!-- Close Button -->
                <span class="close" title="Close Modal" onclick="CloseLoginModal()">&times;</span>
                <img class="modal-logo" src="img/goa-logo.png" alt="Game of Apps Logo">
            </div>
            <div class="modal-cont">
                <!-- Username -->
                <label class="modal-label" for="username">Username</label>
                <input class="modal-input" type="text" placeholder="Enter Username" name="username" required>
                <br>
                <!-- Password -->
                <label class="modal-label" for="password">Password</label>
                <input class="modal-input" type="password" placeholder="Enter Password" name="password" required>
                <br>
                <br>
                <!-- Login Button -->
                <button type="submit" class="modal-button" name="login-button">Login</button>
                <!-- Signup Button -->
                <button type="submit" class="modal-button signup-button" name="signup-button">Sign Up</button>
            </div>
        </form>
    </div>

    <!-- Main Hero - Header -->
    <header class="header hero-img">
        <div class="page-cont">
            <div class="header-text-cont">
                <div class="header-title">App Design & Development <br><span class="orange-text">Competition</span></div>
                <a class="header-btn" href="#events">View Upcoming Events</a>
            </div>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="white-text">
        <div class="section-heading-cont">
            <h1 class="section-title">What is <span class="orange-text">Game of Apps</span></h1>
            <h3 class="section-subtitle">Here's Our Story</h3>
        </div>
        <div class="about-cont">
            <div class="half-col">
                <p><span class="orange-text">Game of Apps </span>is a program that guides high school students through the whole process of building apps from beginning to end. Local professional designers and developers mentor the students weekly and teach them how to use the same tools, techniques and processes as used by the industry while the students learn to build mobile apps.</p>
                <br>
                <p><span class="orange-text">The 24-week program</span> culminates with the student teams pitching their apps and demoing to a panel of judges. The top teams from each school district will go on to compete against other school districts for the provincial titles.</p>
                <br>
                <p><span class="orange-text">Season 3 of Game of Apps</span> will start in the near future and will be run concurrently in five school districts—Vancouver, Richmond, New Westminster, West Vancouver, North Vancouver.</p>
            </div>
            <div class="half-col">
                <div class="video-cont">
                    <iframe type="text/html" width="640" height="360"
                    src="https://www.youtube.com/embed/EfeeXLBC8H4?autoplay=0"
                    frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services">
        <div class="section-heading-cont">
            <h1 class="section-title">What You'll <span class="orange-text">Learn</span></h1>
            <h3 class="section-subtitle">Build an app from scratch!</h3>
        </div>
        <div class="services-cont">
            <div class="service-item-cont">
                <div class="service-img"><img src="img/mentors.png"></div>
                <h4 class="service-heading">Industry Mentors</h4>
                <p class="service-text">On a weekly basis, professional designers and developers will work alongside your school team to coach you every step of the way. Additionally, learn the fundamentals of design and coding in three deep-dive workshops.</p>
            </div>
            <div class="service-item-cont">
                <div class="service-img"><img src="img/design.png"></div>
                <h4 class="service-heading">Design Thinking</h4>
                <p class="service-text">On a weekly basis, professional designers and developers will work alongside your school team to coach you every step of the way. Additionally, learn the fundamentals of design and coding in three deep-dive workshops.</p>
            </div>
            <div class="service-item-cont">
                <div class="service-img"><img src="img/development.png"></div>
                <h4 class="service-heading">Agile Software Development</h4>
                <p class="service-text">On a weekly basis, professional designers and developers will work alongside your school team to coach you every step of the way. Additionally, learn the fundamentals of design and coding in three deep-dive workshops.</p>
            </div>
            <div class="service-item-cont">
                <div class="service-img"><img src="img/awards.png"></div>
                <h4 class="service-heading">Pitch, Demo & Awards</h4>
                <p class="service-text">On a weekly basis, professional designers and developers will work alongside your school team to coach you every step of the way. Additionally, learn the fundamentals of design and coding in three deep-dive workshops.</p>
            </div>
        </div>
    </section>

  <!-- Events -->
   <section id="events">
    <!-- Image -->
    <div class="events event-img">
        <div class="page-cont">
        <div class="header-title">Upcoming Events</div>
        </div>
    </div>

    <!-- Container -->
    <div class="section-heading-cont event-head">
        <h1 class="section-title">Dates & <span class="orange-text">Locations</span></h1>
        <h3 class="section-subtitle">Join us for the Season 2 showcase & championship events <br> Attend one or all of the following events to support our local high school teams!</h3>
    </div>
    <!-- Create Event Container -->
    <?php
    if (isset($_POST['username'])){
        // Admin Account - Show event form
        if($_POST['username'] == "admin"){
            echo '<div class="section-heading-cont">
                <!-- Create Event Button -->
                <a class="header-btn" onclick="ShowEventForm(this)" data-status="open" id="createEvent-btn">Create Event</a>
                <!-- Create Event Form -->
                <br>
                <div id="event-form-cont">
                    <div class="event-form">
                        <form action="" method="POST">
                            <div class="event-field">
                                <!-- City -->
                                <label class="event-label" for="city">City</label>
                                <input class="event-input" type="text" placeholder="Enter City Name" name="city" required>
                            </div>
                            <div class="event-field">
                                <!-- School District # -->
                                <label class="event-label" for="district">School District #</label>
                                <input class="event-input" type="number" placeholder="Enter School District #" name="district" required>
                            </div>
                            <div class="event-field">
                                <!-- Event Type -->
                                <label class="event-label" for="event-type">Event Type</label>
                                <input class="event-input" type="text" placeholder="Enter Event Type" name="event-type" required>
                            </div>
                            <div class="event-field">
                                <!-- Details -->
                                <label class="event-label" for="details">Date, Time & Location</label>
                                <input class="event-input" type="text" placeholder="Enter Event Details" name="details" required>
                            </div>
                            <br>
                            <!-- Post Button -->
                            <button type="submit" name="post-button" class="btn-small event-btn">Post</button>
                        </form>
                    </div>
                </div>
            </div>';
        }
    }
    ?>
      <!-- Locations -->
      <div id="location">
         <div class="location-cont">
            <!-- Cards  -->
            <div class="flip-card">
               <div class="flip-card-inner">
                  <div class="flip-card-front">
                     <h4>RICHMOND</h4>
                     <p>SCHOOL DISTRICT #38</p>
                  </div>
                  <div class="flip-card-back">
                     <h4>Showcase</h4>
                     <p>Sunday April 28  |  2:00 PM @ Richmond Public Library (Minoru)</p>
                  </div>
               </div>
            </div>

            <div class="flip-card">
               <div class="flip-card-inner">
                  <div class="flip-card-front">
                     <h4>NORTH VANCOUVER</h4>
                     <p>SCHOOL DISTRICT #44</p>
                  </div>
                  <div class="flip-card-back">
                     <h4>Showcase</h4>
                     <p>Sunday April 28  |  2:00 PM @ Richmond Public Library (Minoru)</p>
                  </div>
               </div>
            </div>

            <div class="flip-card">
               <div class="flip-card-inner">
                  <div class="flip-card-front">
                     <h4>WEST VANCOUVER</h4>
                     <p>SCHOOL DISTRICT #45</p>
                  </div>
                  <div class="flip-card-back">
                     <h4>Showcase</h4>
                     <p>Sunday April 28  |  2:00 PM @ Richmond Public Library (Minoru)</p>
                  </div>
               </div>
            </div>

            <div class="flip-card">
               <div class="flip-card-inner">
                  <div class="flip-card-front">
                     <h4>NEW WESTMINSTER</h4>
                     <p>SCHOOL DISTRICT #50</p>
                  </div>
                  <div class="flip-card-back">
                     <h4>Showcase</h4>
                     <p>Sunday April 28  |  2:00 PM @ Richmond Public Library (Minoru)</p>
                  </div>
               </div>
            </div>

            <?php
            // $conn = new mysqli($servername, $username, $password, "gameofapps");
            $sql = "SELECT * FROM events;";
            $allEvents = mysqli_query($conn, $sql);

            if(mysqli_num_rows($allEvents) > 0){
                while($row = mysqli_fetch_assoc($allEvents)){
                echo '
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <h4>'.$row["city"].'</h4>
                                <p>SCHOOL DISTRICT '.$row["district"].'</p>
                            </div>
                            <div class="flip-card-back">
                                <h4>'.$row["eventType"].'</h4>
                                <p>'.$row["details"].'</p>
                            </div>
                        </div>
                    </div>';
                }
            }
            // $conn->close();
        ?>
      </div>
   </section>

         </div>
      </div>
   </section>

   <!-- Donate -->
   <section id="donate" class="donate">
      <div class="section-heading-cont">
         <h1 class="section-title">Make a <span class="orange-text">Donation $</span></h1>
         <h3 class="section-subtitle">We're a non-profit organization aiming to educate our future generation.</h3>

         <!-- Form Donation -->
         <form action="#" method="POST" class="donate-form">
            <a class="dollar-btn" data-value="10">$10</a>
            <a class="dollar-btn" data-value="20">$20</a>
            <a class="dollar-btn" data-value="50">$50</a>
            <a class="dollar-btn" data-value="100">$100</a>
            <div class="other-amount">
               <input type="number" placeholder="Other Amount" id="other-input">
            </div>
            <div class="credit-details">
               <div class="cc-top-container">
                  <p class="credit-title">CREDIT PAYMENT</p>
                  <img src="./img/visa.png" alt="Visa Logo" height="70" width="70">
               </div>
               <div class="cc-bot-container">
                  <div class="cc-inp-top-cont">
                     <div class="name-cont">
                        <p class="credit-head">Cardholder's name</p>
                        <input type="text" placeholder="Name" id="dark-bg">
                     </div>
                     <div class="card-num-cont">
                        <p class="credit-head">Card Number</p>
                        <input type="text" placeholder="Card Number" id="dark-bg">
                     </div>
                  </div>
                  <div class="cc-inp-bot-cont">
                     <div class="exp-cont">
                        <div class="date-cont">
                           <p class="credit-head">Expiry Date</p>
                           <input type="text" placeholder="MM" id="dark-bg">
                        </div>
                           <input type="text" placeholder="YY" id="dark-bg">
                     </div>
                     <div class="cvv-cont">
                        <p class="credit-head">CVV</p>
                        <input type="text" placeholder="CVV" id="dark-bg">
                     </div>
                  </div>
               </div>
            </div>
            <button class="donate-btn">DONATE</button>
         </form>
     </div>

   </section>

   <!-- Footer Contact -->
   <section class="footer" id="contact">
      <div class="contact-cont">
         <div class="section-heading-cont">
            <h1 class="section-title">Contact <span class="white-text">Us</span></h1>
            <h3 class="section-subtitle">Be involved. Send us an email.</h3>
            <a class="send-btn" href="mailto:info@gameofapps.org">Send Email</a>
        </div>
      </div>
   </section>

   <!-- Link to JS file -->
   <script src="js/main.js"></script>
</body>
</html>
