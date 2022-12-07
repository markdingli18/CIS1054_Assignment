 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ristorante Il Gambero</title>
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
</head>

    <body>
    <section class="header">
    <nav>
            <a href="index.php"> <img src="assets/images/gambero_logo2.png" alt=""></a>
            <div class="nav-links" id = "navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="index2.php">MENU</a></li>
                    <li><a href="favourites.php">FAVOURITES</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="contact_us.php">CONTACT US</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

    <div class="text-box">
        <h1>Ristorante Il Gambero</h1>
        <p>Marsalforn, Island of Gozo</p>
            <div class="menu_button">
                <a href="index2.php">
                    <button class="button">Our Menu</button>
                </a>
            </div>
            <div class="booking_button">
                <a href="contact_us.php">
                    <button class="button">Book a Table</button>
                </a>
            </div>
    </div>
    </section>

    <!-------JavaScript for toggle menu -------->
    <script>
        var navLinks = document.getElementById("navLinks")

        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>

    <!------- Generic Information -------->  
    
    <section class="general">

            <div class="general_title">
                <h1>Welcome to Ristorante Il Gambero</h1>
            </div>

            <div class="general_col">
                <p>Ristorante il Gambero is a family run restaurant with years of experience in the culinary industry.</p>
                <p>Situated on the water's edge in Marsalforn, Gozo, Ristorante il Gambero, offers a variety of local dishes as well as Mediterranean cuisine.</p>
                <p>In other words, simple, unfussy and low-priced cuisine served in a friendly, homely atmosphere.</p>
            </div>

        </div>
    </section>

    <!------- Staff Information -------->

    <section class="title">
        <h2>Our Staff</h2>
    </section>  

    <div class="container">
        <div class="profiles">
            <div class="profile">
                <img src="assets/images/staff/chef.jpg" class="profile-img">

                <h2 class="user-name">William</h2>
                <h3>Executive Chef</h3>
                <p>Foodservice professional with twelve years' experience in Food Handling and Food Preparation operations. A Great team leader with excellent staff management skills with a track record of training, developing and fostering strong teams. Focused on quality, presentation, and safety.</p>
            </div>
        <div class="profile">
                <img src="assets/images/staff/sous_chef_.jpg" class="profile-img">

                <h2 class="user-name">Joseph</h2>
                <h3>Sous chef</h3>
                <p>Innovative Sous Chef with more than nine years’ experience in operations for renowned restaurants, preparing a wide variety of unique appetizers, soupd, entrées, sauces, and desserts. Proficient in numerous cooking techniques and cuisines from countries around the world.</p>
            </div>
        <div class="profile">
                <img src="assets/images/staff/general_manager.png" class="profile-img">

                <h2 class="user-name">Simon</h2>
                <h3>General Manager</h3>
                <p>General Manager with fifteen years' experience in restaurants and catering establishments. Strong career progression in casual dining. Dynamic and accomplished catering and food service professional. Excellent communication skills and a passion for customer service.</p>
            </div>
        </div>
    </div>

    <div class="container2">
        <div class="profiles">
            <div class="profile">
                <img src="assets/images/staff/waiter.jpg" class="profile-img">

                <h2 class="user-name">Anthony</h2>
                <h3>Head Waiter</h3>
                <p>Headwaiter with exceptional organizational skills to keep track of food and drink orders and the preferences of frequent restaurant patrons. Possesses excellent skills and easily build rapport with customers. He is also fluent in fourforeign languages. Has nineteen years' experience in the catering business.</p>
            </div>
        <div class="profile">
                <img src="assets/images/staff/head_waiter.png" class="profile-img">

                <h2 class="user-name">Peter</h2>
                <h3>Waiter</h3>
                <p>Has excellent people skills, exemplary time management, and the ability to work in a fast-paced environment. His Food safety knowledge, Customer service and the ability to thrive in a high-stress environment are fruit of thirteen years' experienceing Restaurant establishments.</p>
            </div>
        <div class="profile">
                <img src="assets/images/staff/waitress_2.jpg" class="profile-img">

                <h2 class="user-name">Andrea</h2>
                <h3>Waitress</h3>
                <p>An ITS graduate in F & B Service Operations and WSET Advanced. An excellent connoisseur of local wines. Andrea will guide you in your choice of wine to accompany your meal in our restaurant and so make you eating experience an unforgettable one.</p>
            </div>
        </div>
    </div>

    <!------- Location -------->

    <section class="title_location">
        <h2>Location</h2>
    </section>    

        <section class = "location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12899.595971718254!2d14.249269889586225!3d36.0715676832384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x130fb5146b0cc9cf%3A0x85bb14503f782a25!2sIl%20Gambero!5e0!3m2!1sen!2smt!4v1649745676554!5m2!1sen!2smt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

    <!------- Footer -------->
    <footer class="footer">
        <div class="footer_container">
            <div class="footer_row">
                <div class="footer_col">
                    <h4>Il Gambero</h4>
                        <p>Triq Marina, Marsalforn,<p>
                        <p>Zebbug, Gozo, Malta<p>
                </div>
                <div class="footer_col">
                    <h4>Opening Hours</h4>
                        <p>10:00 - 22:00<p>
                        <p>Closed on Mondays<p>
                </div>
                <div class="footer_col">
                    <h4>Contact Us</h4>
                        <p>+356 2156 0353<p>
                        <p>ilgamero@gmail.com<p>
                </div>
                <div class="footer_col">
                    <h4>Social Media</h4>
                    <div class="social_links">
                        <a href="https://www.facebook.com/ristoranteilgamberogozo" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.tripadvisor.com/Restaurant_Review-g190316-d7365369-Reviews-Ristorante_il_Gambero-Marsalforn_Island_of_Gozo.html" target="_blank"><i class="fab fa-tripadvisor"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="footer_bottom">
            <p>&copy; Il Gambero Restaurant</p>
            <p>Designed by Mark Dingli, Marcon Spiteri & Marjohn Saliba</p>
        </div>
    </footer>

</body>
</html>