<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ristorante Il Gambero</title>
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
</head>

    <body>
    <section class="sub-header2">
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
        <h1 style="font-weight: bolder;">Favourites</h1>
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

<!-- PHP code to list items in favourites list -->

<?php
session_start();
$item_ids = array();
//session_destroy();


if(filter_input(INPUT_POST, 'add_to_fav')){
     if(isset($_SESSION['shopping_cart'])){
       $count = count($_SESSION['shopping_cart']);
       $item_ids = array_column($_SESSION['shopping_cart'], 'id');
       if(!empty(filter_input(INPUT_GET, 'id'))){
        $_SESSION['shopping_cart'][$count] = array
        (
           'id' =>filter_input(INPUT_GET, 'id'),
           'name' => filter_input(INPUT_POST, 'name'),  
           'price' =>filter_input(INPUT_POST, 'price'),
         
        );

       }
    
       }
     }
     else{
        //if shopping cart does not exist create first product with array key 0
        //create array using submitted form data, start from key 0 and fill it with values
        $_SESSION['shopping_cart'][0] = array
        (
           'id' =>filter_input(INPUT_GET, 'id'),
           'name' => filter_input(INPUT_POST, 'name'),  
           'price' =>filter_input(INPUT_POST, 'price'),
          
        );

    }
if(filter_input(INPUT_GET, 'action')=='delete'){
    //loop through all items in the cart until it matches with get id variabble
foreach($_SESSION['shopping_cart'] as $key => $item){
    if($item['id']== filter_input(INPUT_GET, 'id')){
        unset($_SESSION['shopping_cart'][$key]);
    
    }
}
//reset seesion array keys so they mathc with $item_ids numeric array
$_SESSION['shopping_cart']= array_values($_SESSION["shopping_cart"]);
}
//pre_r($_SESSION);

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>


<body>
    <div clsss="part">
<?php
$connect = mysqli_connect("localhost", "Assignment", "assignment","menu");
$query = 'SELECT * FROM items ORDER BY id ASC';
$result = mysqli_query($connect, $query);

if($result):
    if(mysqli_num_rows($result)>0):
        while($item = mysqli_fetch_Assoc($result)):
            // print_r($item);
            ?>
       
            <?php
        endwhile;
    endif;
endif;
    
?>

<div style="clear:both"></div>
<br/>
<div class= "table-responsive">
    <table class ="table" style="font-weight: bold; font-size:34px;">
    
    
        <tr><th colspan="5" style="text-align:center;"><h1>Favourites List</h1></th></tr>
        <table class= "table">
        <tr>
            <th width="10%" style="text-align:center; font-size:20px;">Product Name</th>
            <th width= "10%" style="text-align:center; font-size:20px;">Price</th>
            <th width="10%" style="text-align:justify; font-size:20px;">Action</th>
</tr> 
</div>


<?php
if(!empty($_SESSION['shopping_cart'])):

    foreach($_SESSION['shopping_cart'] as $key => $item):
        ?>
        <tr>
            <td  style="text-align:center;"><?php echo $item['name']; ?></td>
            <td style="text-align:center;"><?php echo $item['price'];?></td>
            
            <td>
                
                <a href="favourites.php?action=delete&id=<?php echo $item['id'];?>">
                <div class="btn-danger" style="width:65px; padding: 2px 2px 2px 2px;">Remove</div>
    </a>
    </td>
    </tr>
  
    <?php
    endforeach;
?>
<td colspan="5" style="padding-top:59px; ">
<a href="index2.php" class="button" >Back</a>
    <?php
    if(isset($_SESSION['shopping_cart'])):
        if(count($_SESSION['shopping_cart'])>0):
            ?>
            <a href="favlistemail.php" class="button" >Send via Email</a> 
            <?php endif; endif;?>
          
        </td>
        </tr>
        <?php endif;
        ?>
        </table>
        </div>
        </div>
 

    <!------- Footer -------->
    <footer class="footer" >
        <div class="footer_container" >
            <div class="footer_row">
                <div class="footer_col" >
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