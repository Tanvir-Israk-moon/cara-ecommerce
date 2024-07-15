<?php 
$title= 'Cara';
include_once('include/head.php');

$cproid = $_GET['proid'];

$product_query = "SELECT * FROM `products` WHERE `ID` = '$cproid'";
$product_query_insert = $conn -> query($product_query);
$sproduct = mysqli_fetch_assoc($product_query_insert);           

?>
        <link rel="stylesheet" href="CSS/shop.css">
        <link rel="stylesheet" href="CSS/sproduct.css">
    </head>

    <body>

        <?php
        include_once('include/header.php');
        ?>

        <section id="pro_details" class="section-p1">             

            <div class="single_pro_image">
                <h6><em>Shop / <?php echo  $sproduct['Category'];?></em></h6>
                <img src="img/added_products/<?php echo  $sproduct['Photo1'];?>" id="main_image" alt="">
                <div class="small_image_group">
                    <div class="small_image_column">
                        <img src="img/added_products/<?php echo  $sproduct['Photo1'];?>" class="small_image" alt="">
                    </div>
                    <div class="small_image_column">
                        <img src="img/added_products/<?php echo  $sproduct['Photo2'];?>" class="small_image" alt="">
                    </div>
                    <div class="small_image_column">
                        <img src="img/added_products/<?php echo  $sproduct['Photo3'];?>" class="small_image" alt="">
                    </div>
                    <div class="small_image_column">
                        <img src="img/added_products/<?php echo  $sproduct['Photo4'];?>" class="small_image" alt="">
                    </div>
                </div>
            </div>

            <div class="single_pro_details">
                <h4><?php echo  $sproduct['Name'];?></h4>
                                 
                <h3>$<?php echo  $sproduct['Price'];?></h3>
                
                <select>
                        
                    <?php 
                        $string = $sproduct['Size']; 
                        $str_arr = explode (",", $string);  
                        $optcount = count($str_arr); 
                        $N = 0;
                    ?>

                    <option value="">Select Size</option>
                    <?php while ($optcount > 1) { ?>
                    <option value=""><?php echo  $str_arr[$N];?></option>
                    <?php $optcount--; $N++; }?>
                </select>
                <input type="number" value="1">
                <button class="normal">Add To Cart</button>
                <h4>Product Details</h4>
                <span><?php echo  $sproduct['Details'];?></span>
            </div>
        </section>
    
        <section id="product1">
            <h2>Featured Products</h2>
            <p>Summer Collection New Modern Design</p>
            <div class="pro-container section-p1">

            <?php 
            $pro_category = $sproduct['Category'];
            $featured_products_query = "SELECT * FROM `products` WHERE `Category` = '$pro_category' ORDER BY RAND() LIMIT 4  ";
            $featured_products_query_insert = $conn -> query($featured_products_query);
            while($featured_products = mysqli_fetch_assoc($featured_products_query_insert)){; 
            
            ?>   
                       

                <div class="pro">
                    <img src="img/added_products/<?php echo  $featured_products['Photo1'];?>" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5><?php echo  $featured_products['Name'];?></h5>
                        <div class="star_price_cart">
                            <div class="star_price">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$<?php echo  $featured_products['Price'];?></h4>
                            </div>
                            <div class="cart">
                                <a href="#"><i class="fal fa-shopping-cart cart_icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>             
                <!-- <div class="pro">
                    <img src="img/products/n2.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star_price_cart">
                            <div class="star_price">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$73</h4>
                            </div>
                            <div class="cart">
                                <a href="#"><i class="fal fa-shopping-cart cart_icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro">
                    <img src="img/products/n3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star_price_cart">
                            <div class="star_price">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$73</h4>
                            </div>
                            <div class="cart">
                                <a href="#"><i class="fal fa-shopping-cart cart_icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro">
                    <img src="img/products/n4.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="star_price_cart">
                            <div class="star_price">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$73</h4>
                            </div>
                            <div class="cart">
                                <a href="#"><i class="fal fa-shopping-cart cart_icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>

        <section id="pagination" class="section-p1">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
        </section>

        <?php
            include_once('include/newsletter.php');
        ?>
    
        <footer class="section-p1">
            <div class="column">
                <img class="logo" src="img/logo.png" alt="">
                <h4>Contact</h4>
                <p><strong>Address</strong><address>562 Wellington Road, Street 32, san Francisco</address></p>
                <p><strong>Phone:</strong> +8801840585430</p>
                <p><strong>hours:</strong> 10:00 - 18:00, Mon - Sat</p>
                <div class="follow">
                    <h4>follow us</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-pinterest-p"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>           
            </div>
            <div class="column">
                <h4>About</h4>
                <a href="#">About Us</a>
                <a href="#">Delivery Information</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="column">
                <h4>My Account</h4>
                <a href="#">Sign In</a>
                <a href="#">View Cart</a>
                <a href="#">My Wishlist</a>
                <a href="#">Track My Order</a>
                <a href="#">Help</a>
            </div>
            <div class="column install">
                <h4>Install App</h4>
                <p>Form App Store or Google Play</p>
                <div class="row">
                    <img src="img/pay/app.jpg" alt="">
                    <img src="img/pay/play.jpg" alt="">
                </div>
                <p>Secured Payment Gateways</p>
                <img src="img/pay/pay.png" alt="">
            </div>
            <div class="copyright">
                <p>Copyright © 2024 Go! SKT-Best Online Store for products Lovers | Made with ❤️ by Tanvir Israk Moon</p>
            </div>
        </footer>
                
    </body>
    <script src="js/script.js"></script>
    <script>
        var main_image = document.getElementById("main_image");
        var small_image = document.getElementsByClassName("small_image");

        small_image[0].onclick = function(){
            main_image.src = small_image[0].src;
        }
        small_image[1].onclick = function(){
            main_image.src = small_image[1].src;
        }
        small_image[2].onclick = function(){
            main_image.src = small_image[2].src;
        }
        small_image[3].onclick = function(){
            main_image.src = small_image[3].src;
        }
    </script>
</html>