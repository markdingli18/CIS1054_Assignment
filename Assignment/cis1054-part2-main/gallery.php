<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ristorante Il Gambero</title>
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
</head>

    <body>
    <section class="sub-header3">
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
        <h1>Gallery</h1>
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

    <!------- Gallery Content -------->
        
<div class="gallery-title">

    <h2>Below are some photos of Il Gambero</h2>

</div>

    <div class="full-img" id="fullImgBox">
        <img src="images/gallery/church3.jpg" id="fullImg">
        <span onclick="closeFullImg()">X</span>
    </div>

    <div class="img-gallery">
        <img src="assets/images/gallery/gallery_9.png" onclick="openFullImg(this.src)">
        <img src="assets/images/gallery/gallery_2.jpg" onclick="openFullImg(this.src)">
        <img src="assets/images/gallery/gallery_3.jpg" onclick="openFullImg(this.src)">
        <img src="assets/images/gallery/gallery_4.jpg" onclick="openFullImg(this.src)">
        <img src="assets/images/gallery/gallery_5.jpg" onclick="openFullImg(this.src)">
        <img src="assets/images/gallery/gallery_6.jpg" onclick="openFullImg(this.src)">
        <img src="assets/images/gallery/gallery_10.jpg" onclick="openFullImg(this.src)">
        <img src="assets/images/gallery/gallery_8.png" onclick="openFullImg(this.src)">
    </div>

    <script>

        var fullImgBox = document.getElementById("fullImgBox");
        var fullImg = document.getElementById("fullImg");

        function openFullImg(pic){
        fullImgBox.style.display = "flex";
        fullImg.src = pic;
        }

        function closeFullImg(){
        fullImgBox.style.display = "none";
        }

    </script>  

    <br><br>

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